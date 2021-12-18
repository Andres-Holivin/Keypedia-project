<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Keyboard;
use App\Models\Navigation;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    private $date;
    public function __construct(){
        $this->date= date("l").", ".date("d-M-Y");
    }
    private function getNavigation(){
        if(Auth::check())return Navigation::where('role_id','=',Auth::user()->role_id)->get();
        return null;
    }
    private function getCategoryById($id){
        return Category::find($id)->first();
    }
    private function getRole(){
        if(Auth::check())return Role::where('id','=',Auth::user()->role_id)->first();
        return null;
    }
    private function getCategoryDetail(){
        return Category::get();
    }
    private function getHeaderDetail(){
        $data['navigation']=$this->getNavigation();
        $data['category']=$this->getCategoryDetail();
        $data['role']=$this->getRole();
        return $data;
    }
    private function getKeyboardByCategory($id){
        $keyboard=Keyboard::where('category_id','=',$id)->paginate(8);
        return $keyboard;
    }
    private function getKeyboardById($id){
        $keyboard=Keyboard::where('id','=',$id)->first();
        return $keyboard;
    }
    private function getCartList(){
        return Cart::where('user_id','=',Auth::id())->get();
    }
    private function getTransaction(){
        return Transaction::get();
    }
    private function getTransactionDetail($id){
        return TransactionDetail::where('transaction_id','=',$id)->get();
    }
    public function masterPage(){
        return view('layouts.master');
    }
    public function homePage(Request $request){
        return view('pages.home',['header'=>$this->getHeaderDetail(),'category'=>$this->getCategoryDetail()]);
    }
    public function loginPage(){
        return view('pages.login');
    }
    public function registerPage(){
        return view('pages.register');
    }
    public function keyboardListPage($request){
        return view('pages.keyboardList',['header'=>$this->getHeaderDetail(),'keyboard'=>$this->getKeyboardByCategory($request),'name'=>null]);
    }
    public function keyboardDetailPage($request){
        return view('pages.keyboardDetail',['header'=>$this->getHeaderDetail(),'keyboard'=>$this->getKeyboardById($request)]);
    }
    public function addKeybordPage(){
        return view('pages.addKeyboard',['header'=>$this->getHeaderDetail(),'category'=>$this->getCategoryDetail(),]);
    }
    public function updateKeyboardPage($id){
        return view('pages.keyboardUpdate',['header'=>$this->getHeaderDetail(),'category'=>$this->getCategoryDetail(),'keyboard'=>$this->getKeyboardById($id)]);
    }
    public function manageCategoryPage(){
        return view('pages.manageCategory',['header'=>$this->getHeaderDetail(),'category'=>$this->getCategoryDetail()]);
    }
    public function updateCategoryPage($id){
        return view('pages.categoryUpdate',['header'=>$this->getHeaderDetail(),'category'=>$this->getCategoryById($id)]);
    }
    public function deleteCategory($id){
        Keyboard::where('category_id','=',$id)->delete();
        Category::where('id','=',$id)->delete();
        return redirect('/')->with('success','Delete Category Success');
    }
    public function addKeyboard(Request $req){
        $request= $req->validate([
            'name'=>['required','min:5'],
            'price'=>['required','integer','gt:0'],
            'desc'=>['required','min:20'],
            'category'=>['required'],
            'imageFile'=>['required']
        ]);
        $imagePath=$this->saveFile($req);
        try {
            $keyboard= new Keyboard();
            $keyboard->name=$request['name'];
            $keyboard->price=$request['price'];
            $keyboard->description=$request['desc'];
            $keyboard->category_id=$request['category'];
            $keyboard->image=$imagePath;
            $keyboard->save();
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/')->with('success','Add Keyboard Success');
    }
    public function updateCategory(Request $req,$id){
        $request= $req->validate([
            'name'=>['required','min:5'],
        ]);
        $imagePath=$this->saveFile($req);
        try {
            $category= Category::find($id);
            $request['name']!=null?$category->name=$request['name']:null;
            $imagePath!=null?$category->image=$imagePath:null;
            $category->save();
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/')->with('success','Update Category Success');
    }
    public function myCartPage(){
        return view('pages.myCart',['header'=>$this->getHeaderDetail(),'cart'=>$this->getCartList()]);
    }
    public function transactionPage(){
        return view('pages.transaction',['header'=>$this->getHeaderDetail(),'transaction'=>$this->getTransaction()]);
    }
    public function transactionDetailPage($id){
        return view('pages.transactionDetail',['header'=>$this->getHeaderDetail(),'transactionDetail'=>$this->getTransactionDetail($id)]);
    }
    public function changePasswordPage(){
        return view('pages.changePassword',['header'=>$this->getHeaderDetail()]);
    }
    public function changePassword(Request $req){
        $request= $req->validate([
            'currentPsw'=>['required'],
            'newPsw'=>['required','min:8','same:newPsw_confirmation'],
            'newPsw_confirmation'=>['required'],
        ]);
        $user= Auth::user();
        $userPs=$user->password;
        if (!Hash::check($request['currentPsw'], $userPs)){
            return back()->with('error','Password Salah');
        }
        $user->password=Hash::make($request['newPsw']);
        $user->save();
        return redirect('/')->with('success',"Change Password Success");
    }
    public function deleteKeyboard($id){
        Keyboard::where('id','=',$id)->delete();
        return redirect('/');
    }
    public function deleteCartKeyboard($id){
        Cart::where('keyboard_id','=',$id)->delete();
        return redirect('/MyCart');
    }
    public function searchKeyboard(Request $request){
        $keyboard=Keyboard::where('name','like',"%" .$request->keyword."%")->orWhere('price','like',"%" .$request->keyword."%" )->paginate(8);
        return view('pages.keyboardList',['header'=>$this->getHeaderDetail(),'keyboard'=>$keyboard,'name'=>'Keyboard List']);
    }
    public function saveFile(Request $request){
        if($request->hasfile('imageFile')) {
            foreach($request->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/storage/', $name);
                $imgData[] = $name;
            }
            $imagePath=strval('storage/'.$imgData[0]);
            return $imagePath;
        }
        return null;
    }
    public function updateKeyboard(Request $req,$id){
        $request= $req->validate([
            'name'=>['required','min:5'],
            'price'=>['required','integer','gt:0'],
            'desc'=>['required','min:20'],
            'category'=>['required'],
        ]);
        $imagePath=$this->saveFile($req);
        try {
            $newKeyboard= Keyboard::find($id);
            $request['name']!=null?$newKeyboard->name=$request['name']:null;
            $request['price']!=null?$newKeyboard->price=$request['price']:null;
            $request['desc']!=null?$newKeyboard->description= $request['desc']:null;
            $imagePath!=null?$newKeyboard->image=$imagePath:null;
            $request['category']!=null?$newKeyboard->category_id=$request['category']:null;
            $newKeyboard->save();
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/')->with('success','Update Keyboard Success');
    }
    public function addCart(Request $request){
        if(!Auth::check())return Redirect('Login');
        $cart=Cart::where('keyboard_id','=',$request->input('id'))->first();
        if($cart!=null){
            try {
                $newCart=Cart::find($cart->id);
                $newCart->quantity+=(int)$request->input('qty');
                $newCart->save();
            } catch (\Throwable $th) {
                throw $th;
            }
        }else{
            $cart= new Cart();
            $keyboard=$this->getKeyboardById($request->input('id'));
            try {
                $cart->quantity=$request->input('qty');
                $cart->user_id=Auth::id();
                $cart->keyboard_id=$keyboard['id'];
                $cart->save();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        return redirect('/')->with('success','Add Cart Success');
    }
    public function addTransaction(Request $request){
        if(!Auth::check())return Redirect('Login');
        $data=(array)json_decode($request->input('data'));
        try {
            $transaction= new Transaction();
            $transaction->user_id=Auth::id();
            $transaction->save();
            for($i=0;$i<count($data);$i++){
                $transactionDetail= new TransactionDetail();
                $keyboard=$this->getKeyboardById(array_keys($data)[$i]);
                $transactionDetail->name=$keyboard['name'];
                $transactionDetail->price=$keyboard['price'];
                $transactionDetail->image=$keyboard['image'];
                $transactionDetail->quantity=array_values($data)[$i];
                $transactionDetail->keyboard_id=$keyboard['id'];
                $transactionDetail->transaction_id=$transaction['id'];
                $transactionDetail->save();
            }
            Cart::where('user_id','=',Auth::id())->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/')->with('success','Transaction Success');
    }
    public function authenticate(Request $request){
        $credentials= $request->validate([
            'email'=>['required','email:dns'],
            'password'=>['required']
        ]);
        $minutes = 10080;
        if(Auth::attempt($credentials,true)){
            $request->session()->regenerate();
            if($request['cookies']=="on"){
                Cookie::queue(Cookie::make('email', $credentials['email'], $minutes));
                Cookie::queue(Cookie::make('password', $credentials['password'], $minutes));
            }
            return redirect('/');
        }
        return back()->with('error','Email Atau Password Salah');
    }
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return Redirect('Login');
    }
    public function store(Request $request){
        $credentials= $request->validate([
            'username'=>['required','min:5'],
            'email'=>['required','email:dns','unique:user'],
            'password'=>['required','min:8','confirmed'],
            'password_confirmation'=>['required'],
            'datePicker'=>['required','date'],
            'address'=>['required','min:10'],
            'RadioBtn'=>['required'],
        ]);
        $user= new User;
        $user->username=$credentials['username'];
        $user->email=$credentials['email'];
        $user->password=Hash::make($credentials['password']);
        $user->address=$credentials['address'];
        $user->gender=$credentials['RadioBtn'];
        $user->dob=date('Y-m-d',strtotime($credentials['datePicker']));
        $user->role_id=1;
        $user->save();
        return Redirect('Login')->with('success','Register berhasil silakan login');
    }
}
