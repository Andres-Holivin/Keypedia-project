@extends('layouts.master')
@section('body')
    <script>
        $(document).ready(function(){
            for(let i=0;i<$('.price').length;i++){
                console.log($('.price:eq('+i+')').text())
                $('.price:eq('+i+')').text("Rp. "+new Intl.NumberFormat('en-ID',).format(parseInt($('.price:eq('+i+')').text())));
            }
        });
    </script>
    <div>
        <div class="m-2" style="text-align: center; color: white; font-size: 32px; font-weight: bold; ">
            {{!$name?(count($keyboard)!=null?$keyboard[0]->category->name:"No Keyboard"):$name}}
        </div>
        <div style="display: flex; justify-content: space-between" class="my-4">
            <div>
                <form class="d-flex" action="/Keyboard/search" method="get">
                    <input class="form-control" name="keyword" style="width: 18em; margin-right: 15px" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="d-flex">
                {!! $keyboard->links() !!}
            </div>
        </div>
        @if (count($keyboard)!=null)
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr ; grid-gap: 25px" class="">
                @foreach ($keyboard as $data)
                    <div class="text-white card bg-dark" style="box-shadow: 1px 1px 10px 1px rgb(71, 71, 71); padding-bottom: 10px">
                        <div onclick="window.location='/Keyboard/Detail/'+{{$data->id}}+''" style="cursor: pointer">
                            <div style="background-color: rgba(255, 255, 255, 0.034)">
                                <img style="object-fit: contain; height: 250px;" src="{{URL::asset($data->image)}}" class="card-img-top" alt="{{$data->image}}">
                            </div>
                            <div class="card-body">
                                <h5 style="text-align: center" class="card-title">{{$data->name}}</h5>
                                <p style="text-align: center" class="card-text text-muted price">{{$data->price}}</p>
                            </div>
                        </div>
                        @if (Auth::check()&&auth()->user()->role_id===2)
                            <div style="display: flex; justify-content: space-around;">
                                <button type="button" onclick="window.location='/Keyboard/delete/'+{{$data->id}}+''" class="btn btn-outline-danger">Delete Keyboard</button>
                                <button type="button" onclick="window.location='/Keyboard/Update/'+{{$data->id}}+''" class="btn btn-outline-info">Update Keyboard</button>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
