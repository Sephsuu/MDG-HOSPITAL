<?php

namespace App\Http\Controllers\mdg;

use App\Http\Controllers\Controller;
use App\Models\mdg\UserPatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserPatientController extends Controller
{
    
    public function signupForm(Request $request){
        return view('mdg/forms/signup');
    }

    public function signupSubmit(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
            'password1' => 'required|min:8',
            'password2' => 'required|min:8|same:password1',
        ]);

        $password = Hash::make($data['password1']);

        $user = User::create([
            'email' => $data['email'],
            'password' => $password
        ]);

        UserPatient::create([
            'user_id' => $user['id'],
            'first_name' => $data['fname'],
            'last_name' => $data['lname'],
        ]);

        return redirect()->route('index');
    }

    public function loginForm(Request $request){
        return view('mdg/forms/login');
    }

    public function loginSubmit(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $data['email'])->first();
        echo $user;

        if ($user){
            if ($data['password'] === $user->password){
                return redirect()->route('index');
            }else{
                return redirect()->route('login.form');
            }
        }else{
            return redirect()->route('signup.form');
        }
    }

    
}
