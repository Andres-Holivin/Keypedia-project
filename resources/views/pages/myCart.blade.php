@extends('layouts.master')
@section('body')
    <style>
        .counter {
            background-color: transparent;
            color: white;
            width: 45px;
            border: none;
            text-align: center;
            outline: none;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
                -moz-appearance:textfield;
        }
    </style>
    <script>
        $(document).ready(function(){
            let price=[];
            let totalPrice=0;
            $('.btn-counter').click(function(e){
                e.preventDefault();
                let index = Math.floor($(this).index(".btn-counter")/2);
                let button_classes, value=1;
                button_classes,value = +$('.counter:eq('+index+')').val();
                button_classes = $(e.currentTarget).prop('class');
                if(button_classes.indexOf('up_count') !== -1){
                    value = (value) + 1;
                } else {
                    value = (value) - 1;
                }
                value = value < 1 ? 1 : value;
                $('.counter:eq('+index+')').val(value);
                let totalPrice=0;
                for(let i=0;i<$('.price').length;i++){
                    totalPrice+=price[i]*$('.counter:eq('+i+')').val();
                }
                $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(totalPrice));
            });
            $('.counter').click(function(){
                $(this).index(".counter");
                $(this).focus().select();
            });
            for(let i=0;i<$('.price').length;i++){
                price[i]=$('.price:eq('+i+')').text();
                totalPrice+=price[i]*$('.counter:eq('+i+')').val();
                $('.price:eq('+i+')').text("Rp. "+new Intl.NumberFormat('en-ID',).format(price[i]));
            }
            $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(totalPrice));
            $('#checkout').click(function(){
                var param = {};
                for(let i=0;i<$('.dataId').length;i++){
                    console.log($('.dataId:eq('+i+')').text());
                    param[$('.dataId:eq('+i+')').text()]=$('.counter:eq('+i+')').val();
                }
                $('#checkout').val(JSON.stringify(param));
            })
            $('.btnTrash').click(function(){
                let index=$(this).index('.btnTrash');
                console.log($('.btnTrash:eq('+index+')').attr("data"));
                window.location='/Cart/Keyboard/delete/'+$('.btnTrash:eq('+index+')').attr("data");
            })
        });
    </script>
    @if (count($cart)==null)
        <div class="fs-2 fw-bolder" style="color: white; text-align: center">
            You don't have any items in the cart
        </div>
    @else
        <form method="POST" action="/Keyboard/addTransaction" style="display: grid; grid-template-columns: 3fr 1fr ;grid-gap: 20px;margin: 10px 50px 10px 50px;" class="">
            @csrf
            <div style=" grid-template-rows: 1fr 1fr 1fr ; display: grid;">
                @foreach ($cart as $data )
                    <div class="dataId" style="display: none">{{$data['keyboard_id']}}</div>
                    <div style="display: grid; grid-template-columns: 1fr 3fr ; height: 180px;">
                        <div style="display: flex; align-items:  center;">
                            <img style="object-fit: contain; height: 150px; width: 250px" src="{{URL::asset($data->keyboard->image)}}" class="card-img-top" alt="...">
                        </div>
                        <div style="color: white ; display: flex; flex-direction: column; justify-content: space-between" class="p-2">
                            <div>
                                <div class="fw-bolder fs-4" >
                                    {{$data->keyboard->name}}
                                </div>
                                <div class="fs-5 price">
                                    {{$data->keyboard->price}}
                                </div>
                            </div>
                            <div class="fs-4" style="display: flex; align-items: center; justify-content: end;">
                                <i class="bi bi-trash-fill btnTrash" data="{{$data['keyboard_id']}}"></i>
                                <div class="mx-2" style="display: flex; justify-content: center; border: 1px solid #198754; border-radius: 5px; ">
                                    <i class="btn-counter down_count bi bi-dash-lg text-light fs-2"></i>
                                    <input class='m-1 counter' style="width: 5em" type="number" placeholder="value..." value='{{$data['quantity']}}' />
                                    <i class="btn-counter up_count bi bi-plus-lg text-light fs-2"></i>
                                </div>
                            </div>
                        </div>
                        <hr style="border: 1px solid white;grid-column: 1 / span 2;"></hr>
                    </div>
                @endforeach
            </div>
            <div>
                <div class="text-white bg-transparent border border-2 border-dark card ">
                    <div class="card-header fs-4" style="text-align: center">
                      Detail Order
                    </div>
                    <div class="card-body" style="display: flex; align-items: center; flex-direction: column; justify-content: center;">
                      <div class="my-3 fs-5" style="display: flex; flex-direction: column; ">
                          <div class="fs-6" style="text-align: center">Total Price</div>
                          <div id="totalPrice">Rp. 100000</div>
                      </div>
                      <div>
                          <button type="submit" class="btn btn-outline-success" name="data" value="1" id="checkout">Checkout</button>
                      </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection
