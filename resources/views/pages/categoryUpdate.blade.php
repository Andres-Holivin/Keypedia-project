@extends('layouts.master')
@section('body')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <form action="/Category/Update/{{$category->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin: 10px 50px 10px 50px; background-color: #423F3E; padding: 30px;border-radius:10px ">
            <div style="display: grid; grid-template-columns: 2fr 3fr; grid-gap: 25px" class="">
                <img style="object-fit: contain; height: 350px;" src="{{URL::asset($category['image'])}}" class="card-img-top" alt="...">
                <div style="">
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="floatingInputGrid" name="name" placeholder="name@example.com" value="{{$category->name}}" >
                        <label for="floatingInputGrid">Category Name</label>
                        @error('name')
                        <div>
                            <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 input-group">
                        <input type="file" class="form-control" id="inputGroupFile02"name="imageFile[]">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
