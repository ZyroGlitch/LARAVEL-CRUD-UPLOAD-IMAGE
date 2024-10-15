<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   public function login(){
        return view('index');
    }

    public function register(){
        return view('register');
    }


    public function store(){
        $userData = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        // Fetch the data using email
        $user = User::where('email',request('email'))->value('id');

        if($user){
            Session::put('userID',$user);
            return redirect(route('view.product'));
        }
    }

    public function checkAuth(){
        // Fetch the data using email
        $user = User::where('email', request('email'))->first();

        if ($user && Hash::check(request('password'), $user->password)) {
            Session::put('userID',$user->id);
            
            return redirect()->route('view.product');
        } else {
            return redirect(route('view.login'))
                ->with('status', 'Incorrect Username or Password!');
        }
    }

    public function logout(){
        Session::flush(); // Remove all session
        return redirect()->route('view.login');
    }
}