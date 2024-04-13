<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelcontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return redirect('/');
    }

    public function about(){
        return view('about');
    }

    public function footer(){
        return view('footer');
    }
 
    public function rooms(){
        return view('rooms');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }
}
