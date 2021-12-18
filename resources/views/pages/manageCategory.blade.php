@extends('layouts.master')
@section('body')
    <div>
        <div class="m-2" style="text-align: center; color: white; font-size: 32px; font-weight: bold; ">
            Manage Categories
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; grid-gap: 25px; padding-left: 40px;padding-right: 40px" class="">
            @foreach ($category as $data)
                <div class="text-white card bg-dark"  style="box-shadow: 1px 1px 10px 1px rgb(71, 71, 71);">
                    <div style="background-color: rgba(255, 255, 255, 0.034); cursor: pointer;" onclick="window.location='/Keyboard/List/'+{{$data->id}}+''">
                        <img style="object-fit: contain; height: 250px;" src="{{URL::asset($data['image'])}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: center" class="card-title">{{$data['name']}}</h5>
                        @if (auth()->user()->role_id===2)
                            <div style="display: flex; justify-content: space-around;">
                                <button type="button" onclick="window.location='/Category/Delete/'+{{$data->id}}+''" class="btn btn-outline-danger">Delete Categories</button>
                                <button type="button" onclick="window.location='/Category/Update/'+{{$data->id}}+''" class="btn btn-outline-info">Update Categories</button>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
