<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index(){
        return view('auth.log');
    }

    function landing(){
        return view('auth.landing');
    }

    function menu(){
        return view('auth.list');
    }

    function register(){
        return view('auth.regis');
    }

    function attempt(Request $request){

    }
}
