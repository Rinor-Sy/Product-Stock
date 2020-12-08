@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @if(count($products) > 0)
        <div class="container mt-4">
            <div class="well">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-8 col-sm-8 mt-3">
                        <h3>{{$product->title}}</h3>
                        <small>{{$product->price}}$</small>
                        <p>Stock: {{$product->stock}}</p>
                        <small>Published at: {{$product->published_at}}</small>    
                        <div class="mt-3 d-flex ">
                            <div class="mr-2">
                                <a href="{{ route('products.edit', $product->id) }}"class="btn btn-outline-primary">Edit</a>    
                            </div>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                onsubmit="return confirm('{{("Are your sure to delete this product?")}}')">
                                @csrf
                               @method('DELETE')
                                 <button type="submit" class="btn btn-outline-danger ">Delete</button>
                             </form>
                        </div>                    
                    </div>
                    @endforeach
                    @else
                     <p>No products found!</p>
                    @endif             
                </div>
            </div>
        </div>
@endsection