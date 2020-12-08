@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
        <div class="container mt-4">
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        @if ($product->user_id !== auth()->user()->id)
                            <h3>{{$product->title}}</h3>       
                        @else
                            <h3><a href="/products/{{$product->id}}">{{$product->title}}</a></h3>
                        @endif
                        <small>{{$product->price}}$</small>
                        <p>Stock: {{$product->stock}}</p>
                        <small>From: {{$product->user->name}}</small>    
                        <br>                    
                        <small>At: {{$product->published_at}}</small>                        
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    @else
        <p>No products found!</p>
    @endif
@endsection