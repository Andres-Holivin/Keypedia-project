@extends('layouts.master')
@section('body')
    <script>
        $(document).ready(function(){
            for(let i=0;i<$('.totalPrice').length;i++){
                $('.totalPrice:eq('+i+')').html("Total Price <br> Rp. "+new Intl.NumberFormat('en-ID',).format(parseInt($('.totalPrice:eq('+i+')').text())));
            }
        });
    </script>
    <div style="display: flex; flex-direction: column; align-items: center">
        <div class="fs-2 fw-bolder" style="color: white;">
            Your Transaction History
        </div>
        @foreach ($transaction as $data)
            <div class="card bg-dark p-2" style="box-shadow: 1px 1px 10px 1px rgb(71, 71, 71);display: flex; flex-direction: column;  color: white; padding: 5px; border-radius: 5px; margin-top: 20px;">
                <div onclick="window.location='/Transaction/Detail/'+{{$data['id']}}+''" style="cursor: pointer">
                    <div>{{$data['created_at']}}</div>
                    <hr style="border: 1px solid white;"></hr>
                    <div style="display: flex; ">
                        <div >
                            <img style="object-fit: contain; height: 100px;width: 250px" src="{{URL::asset($data->transactionDetail[0]->image)}}" class="card-img-top" alt="{{$data->transactionDetail[0]->name}}">
                            @if (count($data->transactionDetail)-1>0)
                                <div>+{{count($data->transactionDetail)-1}} other products</div>
                            @endif
                        </div>
                        <div style="display: flex; flex-direction: column; " class="py-2 px-4">
                            <div class="fw-bolder fs-5" style="width:550px;text-align: justify">{{$data->transactionDetail[0]->name}}</div>
                            <div class="totalPrice" class="fs-6">
                                @php
                                    $totalPrice=0;
                                    foreach ($data->transactionDetail as $price){
                                        $totalPrice+=$price->price*$price->quantity;
                                    }
                                @endphp
                                {{$totalPrice}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
