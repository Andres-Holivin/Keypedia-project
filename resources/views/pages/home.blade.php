@extends('layouts.master')
@section('body')
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        @if (session()->has('error'))
            <div style="position: fixed; " class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session()->has('success'))
            <div style="position: fixed; " class="alert alert-success alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="m-2" style="text-align: center; color: white; font-size: 32px; font-weight: bold; ">
            Welcome To Keypedia<br>
        </div>
        <div class="m-2" style="text-align: center; color: white; font-size: 22px;  ">
            Best Keyboard and Keycaps Shop<br>
        </div>
        <div class="m-2" style="text-align: center; color: white; font-size: 28px; font-weight: bolder; ">
            Categories<br>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; grid-gap: 25px; padding-left: 40px;padding-right: 40px" class="">
            @foreach ($category as $data)
                <div class="text-white card bg-dark" onclick="window.location='/Keyboard/List/'+{{$data->id}}+''" style="box-shadow: 1px 1px 10px 1px rgb(71, 71, 71);">
                    <div style="background-color: rgba(255, 255, 255, 0.034)">
                        <img style="object-fit: contain; height: 250px;" src="{{$data['image']}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: center" class="card-title">{{$data['name']}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
