@extends('layouts.master')
@section('body')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <form method="POST" method="/Keyboard/Update" enctype="multipart/form-data">
        @csrf
        <div style="margin: 10px 50px 10px 50px; background-color: #423F3E; padding: 30px;border-radius:10px ">
            <div style="display: grid; grid-template-columns: 2fr 3fr; grid-gap: 25px" class="">
                <img style="object-fit: contain; height: 350px;" src="{{URL::asset($keyboard->image)}}" class="card-img-top" alt="...">
                <div style="">
                    <div class="mb-3 form-floating">
                        <select class="form-select @error('category')is-invalid @enderror" id="floatingSelectGrid" name="category" aria-label="Floating label select example">
                          @foreach ($category as $data)
                            <option value="{{$data->id}}" @if ($data->name==$keyboard->category->name)
                                selected
                            @endif>{{$data->name}}</option>
                          @endforeach
                        </select>
                        <label for="floatingSelectGrid">Category</label>
                        @error('category')
                        <div>
                            <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control @error('name')is-invalid @enderror" name='name' id="floatingInputGrid" placeholder="name@example.com" value="{{$keyboard->name}}">
                        <label for="floatingInputGrid">Keyboard Name</label>
                        @error('name')
                        <div>
                            <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="number" class="form-control @error('price')is-invalid @enderror" name="price" id="floatingInputGrid" placeholder="name@example.com" value="{{$keyboard->price}}">
                        <label for="floatingInputGrid">Keyboard Price</label>
                        @error('price')
                        <div>
                            <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$keyboard->description}}</textarea>
                        <label for="floatingTextarea2">Description</label>
                        @error('desc')
                        <div>
                            <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" name="imageFile[]">
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
