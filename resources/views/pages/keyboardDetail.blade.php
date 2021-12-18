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
            let price=$('#harga').text();
            $('#harga').text("Rp. "+new Intl.NumberFormat('en-ID',).format(price));
            $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(price));
            $('i').click(function(e){
                e.preventDefault();
                let index = 0;
                let button_classes, value=1;
                button_classes,value = +$('.counter:eq('+index+')').val();
                console.log(value);
                button_classes = $(e.currentTarget).prop('class');
                if(button_classes.indexOf('up_count') !== -1){
                    value = (value) + 1;
                } else {
                    value = (value) - 1;
                }
                value = value < 1 ? 1 : value;
                $('.counter:eq('+index+')').val(value);
                $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(price*value));
            });
            $('#qty').on('change', function() {
                $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(price*$('#qty').val()));
            });
            $('.counter').click(function(){
                $(this).index(".counter")
                $(this).focus().select();
            });
            $('#btnCart').click(function(){
                window.location='/Keyboard/addCart?id='+$('#btnCart').val()+'&qty='+$('.counter:eq('+0+')').val();
            })

        });
    </script>
    <div style="margin: 10px 50px 10px 50px">
        <div style="display: grid; grid-template-columns: 2fr 2fr @if (Auth::check())1fr @endif ; grid-gap: 25px" class="">
            <img style="object-fit: contain; height: 350px;" src="{{URL::asset($keyboard['image'])}}" class="card-img-top" alt="...">
            <div style="color: white;">
                <div class="fs-4 fw-bolder" style="text-align: justify;">
                    {{$keyboard['name']}}
                </div>
                <div class="my-2 fs-5" id="harga">
                    {{$keyboard['price']}}
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Detail</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" style="text-align: justify" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        {!! $keyboard['description'] !!}
                    </div>
                </div>
            </div>
            @if (Auth::check() && auth()->user()->role_id!=2)
                <div class="text-white bg-transparent border border-2 border-dark card " style="height: 300px">
                    <div class="card-header fs-4" style="text-align: center">
                    Detail Order
                    </div>
                    <div class="card-body" style="display: flex; align-items: center; flex-direction: column; justify-content: center;">
                    <div style="display: flex; justify-content: center; border: 1px solid #198754; border-radius: 5px">
                        <i class="down_count bi bi-dash-lg $white fs-3"></i>
                        <input id='qty' class='m-1 counter' style="width: 5em;" type="number" placeholder="value..." value='1' />
                        <i class="up_count bi bi-plus-lg $white fs-3"></i>
                    </div>
                    <div class="my-3 fs-5" style="display: flex; flex-direction: column; ">
                        <div class="fs-6" style="text-align: center">Total Price</div>
                        <div id="totalPrice">{{$keyboard['price']}}</div>
                    </div>
                    <div>
                        <button type="button" id='btnCart'class="btn btn-outline-success" value="{{$keyboard['id']}}">Add To Cart</button>
                    </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
