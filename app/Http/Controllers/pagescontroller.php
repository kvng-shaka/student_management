<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
   /*   public function __construct()
    {
        $this->middleware('auth',['except'=>['login','register']]);
    }*/

    public function signin(){
        $title ='signin';
        return view('pages.signin')->with($title);
    }
    
    public function signup(){
        $title ='signup';
        return view('pages.signup')->with($title);
    }
}
