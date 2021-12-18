@extends('layouts.master')
@section('body')
    <script>
        $(document).ready(function(){
            for(let i=0;i<$('.price').length;i++){
                $('.price:eq('+i+')').text("Rp. "+new Intl.NumberFormat('en-ID',).format(parseInt($('.price:eq('+i+')').text())));
            }
            $('#totalPrice').text("Rp. "+new Intl.NumberFormat('en-ID',).format(parseInt($('#totalPrice').text())));
        });
    </script>
        <div style="display: grid; grid-template-columns: 3fr 1fr ;grid-gap: 20px;margin: 10px 50px 10px 50px;" class="">
            <div style=" grid-template-rows: 1fr 1fr 1fr ; display: grid;">
                <div style="display: grid; grid-template-columns: 1fr 3fr ; height: 180px;">
                    @foreach ($transactionDetail as $data )
                        <div style="display: flex; align-items:  center;">
                            <img style="object-fit: contain; height: 150px; width: 250px" src="{{URL::asset($data->image)}}" class="card-img-top" alt="...">
                        </div>
                        <div style="color: white ; display: flex; flex-direction: column; justify-content: space-between" class="p-2">
                            <div class="mx-3">
                                <div class="fw-bolder fs-4" style="cursor: pointer;" onclick="window.location='/Keyboard/Detail/'+{{$data->keyboard_id}}+''">
                                    {{$data->name}}
                                </div>
                                <div style="display: flex; justify-content: space-between;align-items: center">
                                    <div style="display: flex">
                                        <div class="fs-5">
                                            {{$data->quantity}} *&ensp;
                                        </div>
                                        <div class="fs-5 price" >
                                            {{$data->price}}
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column ; align-items: center"  >
                                        <div class="fs-5 fw-bolder">Total Price</div>
                                        <div class="price fs-5">{{$data->quantity*$data->price}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="border: 1px solid white;grid-column: 1 / span 2;"></hr>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="text-white bg-transparent border border-2 border-dark card ">
                    <div class="card-header fs-4" style="text-align: center">
                      Detail Order
                    </div>
                    <div class="card-body" style="display: flex; align-items: center; flex-direction: column; justify-content: center;">
                      <div class="my-3 fs-5" style="display: flex; flex-direction: column; ">
                          <div class="fs-6" style="text-align: center">Total Price</div>
                            @php
                                $totalPrice=0;
                                foreach ($transactionDetail as $price){
                                    $totalPrice+=$price->price*$price->quantity;
                                }
                            @endphp
                          <div id="totalPrice">{{$totalPrice}}</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
