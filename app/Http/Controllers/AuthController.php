<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AuthController extends Controller
{
    function index(){
        return view('auth.log');
    }

    function landing(){
        return view('auth.landing');
    }

    function menu(){
        $categories = Category::with('products')->get();
        return view('auth.list', ['categories' => $categories]);
    }

    function register(){
        return view('auth.regis');
    }

    function attempt(Request $request){

    }

    public function categoria()
{
    return $this->belongsTo(Categoria::class);
}
}
