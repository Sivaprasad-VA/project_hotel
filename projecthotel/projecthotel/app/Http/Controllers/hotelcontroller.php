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

    
    public function registration(){
        return view('registration');
    }
    public function submit(Request $r)
    {
        
            $name=$r->post('name');
            $email=$r->post('email');
            $password=$r->post('password');
            $phone=$r->post('phone');
            $data=array('name'=>$name,'email'=>$email,'password'=>$password,'phone'=>$phone,);
            hotel::create($data);
            echo "inserted";     
        
    }
   
}
