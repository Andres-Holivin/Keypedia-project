@extends('layouts.master')
@section('body')
<form action="/Keyboard/Add" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin: 10px 100px 10px 100px; background-color: #423F3E; padding: 30px;border-radius:10px ">
        <div style="">
            <div class="mb-3 form-floating">
                <select class="form-select @error('category')is-invalid @enderror" name="category" id="floatingSelectGrid" aria-label="Floating label select example">
                    @foreach ($category as $data)
                        <option value="{{$data->id}}" @if ($data->id==$category[0]->id)
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
                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com"value="{{old('name')}}" >
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
                <input type="number" name="price" class="form-control @error('price')is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{old('price')}}">
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
                <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{old('desc')}}</textarea>
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
                <input type="file" class="form-control @error('imageFile')is-invalid @enderror" id="inputGroupFile02" name="imageFile[]" value="{{old('imageFile[]')}}">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            @error('imageFile')
            <div>
                <input style="display: none;" type="text" class="form-control is-invalid" id="validationServer02" value="Otto" required>
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            </div>
            @enderror
            <div style="text-align: center">
                <button type="submit" class="btn btn-outline-success">Add</button>
            </div>
        </div>
    </div>
</form>
@endsection
