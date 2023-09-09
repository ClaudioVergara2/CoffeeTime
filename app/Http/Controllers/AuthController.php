<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin(){ //index
        return view('auth.log');
    }

    function landing(){
        return view('auth.landing');
    }

    function menu(){
        $categories = Category::with('products')->get();
        return view('auth.list', ['categories' => $categories]);
    }

    function ShowRegister(){
        return view('auth.regis');
    }

    function attempt(Request $request){

    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function storeAccount(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}
