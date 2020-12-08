@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create a Product</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="card mt-4">
                <div class="card-body">
                    <form method="POST" action="/products">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                        <input type="text" class="form-control"  name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                               <p class="text-danger">{{ $errors->first('title') }}</p>                               
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body">Price:</label>
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                            @if ($errors->has('title'))
                               <p class="text-danger">{{ $errors->first('price') }}</p>                               
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text">Stock</label>
                                </div>
                                <select class="custom-select" name="stock">
                                  <option selected disabled>Choose your stock!</option>
                                  <option value="Devices">Devices</option>
                                  <option value="Clothes">Clothes</option>
                                  <option value="Food">Food</option>
                                </select>
                              </div>
                              @if ($errors->has('title'))
                               <p class="text-danger">{{ $errors->first('stock') }}</p>                               
                                @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection