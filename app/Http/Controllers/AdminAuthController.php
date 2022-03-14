<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AdminAuthController extends Controller
{
    public function index(Request $request){
        echo view('login');
    }

    public function login(Request $req){
        // validation (form)
        $validated = $req->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        //validate cred.
        $email = $req->input('email');
        $password = $req->input('password');

        // SELECT * FROM users WHERE `email` = $email AND `password` = $password

        //---- 1) Select ONLY email => to get the hashed password value
        $user_info = User::where('email',$email)->first();

        // Hashed pass stored in db
        $hashed_pass = $user_info->password;
        
        // Check the input password against password from db
        $result = Hash::check($password,$hashed_pass);

        if ( $result ) {
            
            session()->put('user_id',$user_info->id);
            // Redirect to success page
            //return redirect()->route('login');
        }else{
            return redirect()->route('category.create');
        }
    }
}
