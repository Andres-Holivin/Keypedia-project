@extends('layouts.master')
@section('body')
    <div style="display: flex; flex-direction: column; align-items: center; margin-top: 80px; ">
        @if (session()->has('error'))
            <div style="position: fixed; " class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/Password/Change" method="post" style="width: 450px;background-color: #423F3E;" class="p-4 border rounded-3">
            @csrf
            <div>
                <span class="fs-2 text-light fw-bolder">Change Password</span>
            </div>
            <hr style="border: 1px solid white;"></hr>
            <div class="mb-3 form-floating">
                <input type="password" name="currentPsw" class="form-control @error('currentPsw')is-invalid @enderror" id="UsernameLogin" placeholder="username" value="{{old('currentPsw')}}">
                <label for="UsernameLogin" >Current Password</label>
                @error('currentPsw')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control @error('newPsw')is-invalid @enderror" name="newPsw" id="UsernameLogin" placeholder="username" value="{{old('newPsw')}}">
                <label for="UsernameLogin" >New Password</label>
                @error('newPsw')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="password" name="newPsw_confirmation" class="form-control @error('newPsw_confirmation')is-invalid @enderror" id="UsernameLogin" placeholder="username" value="{{old('newPsw_confirmation')}}">
                <label for="UsernameLogin" >New Confirm Password</label>
                @error('newPsw_confirmation')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
@endsection
