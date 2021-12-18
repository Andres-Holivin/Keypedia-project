<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'homePage']);
Route::get('/Login', [HomeController::class,'loginPage'])->name('login')->middleware('guest');
Route::get('/Register', [HomeController::class,'registerPage'])->middleware('guest');
Route::get('/Password/Change', [HomeController::class,'changePasswordPage'])->middleware('auth');
Route::get('/Keyboard/List/{id}', [HomeController::class,'keyboardListPage']);
Route::get('/Keyboard/search', [HomeController::class,'searchKeyboard']);
Route::get('/Keyboard/Update/{Id}', [HomeController::class,'updateKeyboardPage'])->middleware('is_manager');
Route::get('/Keyboard/Detail/{Id}', [HomeController::class,'keyboardDetailPage']);
Route::get('/Keyboard/addCart', [HomeController::class,'addCart'])->middleware('auth');
Route::get('/Keyboard/delete/{Id}', [HomeController::class,'deleteKeyboard'])->middleware('auth');
Route::get('/Cart/Keyboard/delete/{id}', [HomeController::class,'deleteCartKeyboard'])->middleware('auth');
Route::get('/Keyboard/Add', [HomeController::class,'addKeybordPage'])->middleware('is_manager');
Route::get('/Category/Manage', [HomeController::class,'manageCategoryPage'])->middleware('is_manager');
Route::get('/Category/Update/{Id}', [HomeController::class,'updateCategoryPage'])->middleware('is_manager');
Route::get('/Category/Delete/{Id}', [HomeController::class,'deleteCategory'])->middleware('is_manager');
Route::get('/MyCart', [HomeController::class,'myCartPage'])->middleware('is_customer');
Route::get('/Transaction', [HomeController::class,'transactionPage'])->middleware('is_customer');
Route::get('/Transaction/Detail/{Id}', [HomeController::class,'transactionDetailPage'])->middleware('is_customer');
Route::get('/Logout', [HomeController::class,'logout'])->middleware('auth');

Route::post('/Register', [HomeController::class,'store'])->middleware('guest');
Route::post('/Keyboard/addTransaction', [HomeController::class,'addTransaction'])->middleware('auth');
Route::post('/Login', [HomeController::class,'authenticate'])->middleware('guest');
Route::post('/Keyboard/Update/{id}', [HomeController::class,'updateKeyboard'])->middleware('is_manager');
Route::post('/Category/Update/{Id}', [HomeController::class,'updateCategory'])->middleware('is_manager');
Route::post('/Keyboard/Add', [HomeController::class,'addKeyboard'])->middleware('is_manager');
Route::post('/Password/Change', [HomeController::class,'changePassword'])->middleware('auth');


