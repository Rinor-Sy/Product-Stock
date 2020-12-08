@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Product</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="card mt-4">
                <div class="card-body">
                <form method="POST" action="/products/{{$product->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                        <input type="text" class="form-control"  name="title" value="{{ $product->title }}">
                            @if ($errors->has('title'))
                               <p class="text-danger">{{ $errors->first('title') }}</p>                               
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body">Price:</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            @if ($errors->has('price'))
                               <p class="text-danger">{{ $errors->first('price') }}</p>                               
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text">Stock</label>
                            </div>
                            <select class="custom-select d-block" name="stock">
                              <option selected disabled>Choose your stock!</option>
                              <option value="Devices">Devices</option>
                              <option value="Clothes">Clothes</option>
                              <option value="Food">Food</option>
                            </select>
                            
                          </div>
                          @if ($errors->has('stock'))
                               <p class="text-danger">{{ $errors->first('stock') }}</p>                               
                                @endif
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection