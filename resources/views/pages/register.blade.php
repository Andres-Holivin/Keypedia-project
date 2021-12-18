@extends('layouts.master')
@section('body')
    <div style="display: flex; flex-direction: column; align-items: center; margin-top: 10px; margin: 10px ">
        <form action="/Register" method="POST" style="width: 450px;background-color: #423F3E;" class="p-4 border rounded-3">
            @csrf
            <div><span class="fs-2 text-light fw-bolder">Register</span></div>
            <hr style="border: 1px solid white;"></hr>
            @error('msg')
                {{$msg}}
            @enderror
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('username')is-invalid @enderror" id="UsernameLogin" placeholder="username" name="username" value="{{old('username')}}">
                <label for="UsernameLogin" >Username</label>
                @error('username')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('email')is-invalid @enderror" id="EmailLogin" placeholder="email" name="email" value="{{old('email')}}">
                <label for="EmailLogin" class="form-label">Email</label>
                @error('email')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control @error('password')is-invalid @enderror" id="PasswordLogin" placeholder="password" name="password" >
                <label for="PasswordLogin" class="form-label">Password</label>
                @error('password')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control @error('password_confirmation')is-invalid @enderror" id="ConfirmPasswordLogin" placeholder="Confirm Password" name='password_confirmation'>
                <label for="ConfirmPasswordLogin" class="form-label">Confirm Password</label>
                @error('password_confirmation')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input data-provide="datepicker" name="datePicker" class="form-control @error('datePicker')is-invalid @enderror" id="date" placeholder="date" value="{{old('datePicker')}}">
                <label for="date" class="form-label">Date Of Birth</label>
                @error('datePicker')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <textarea class="form-control @error('address')is-invalid @enderror" placeholder="Leave a comment here" id="Address" style="height: 100px; resize: none" name="address" >{{old('address')}}</textarea>
                <label for="Address">Address</label>
                @error('address')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <div  class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="Male" name="RadioBtn">
                    <label class="form-check-label text-light" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value="Female" name="RadioBtn">
                    <label class="form-check-label text-light" for="inlineRadio2">Female</label>
                </div>
                @error('RadioBtn')
                <div>
                    <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script>
        const elem = document.querySelector('input[name="datePicker"]');
        const datepicker = new Datepicker(elem, {});
    </script>
@endsection
