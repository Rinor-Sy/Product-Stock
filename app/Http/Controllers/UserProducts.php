<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


use Illuminate\Http\Request;

class UserProducts extends Controller
{
    public function index(){
        $user = Auth::user();
        $products = Product::with('user')
            ->where('user_id',$user->id)
            ->orderByDesc('published_at')
            ->get();

        return view('publishedby.index')->with('products', $products);
    }
    
}
