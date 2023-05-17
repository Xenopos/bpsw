<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use \App\Http\Controllers\NormalUserController;
use \App\Http\Controllers\ServiceProviderController;
use \App\Http\Controllers\SearchController;

class AuthManager extends Controller
{
    function login()
    {
        return view('login_page');
    }

    function signup()
    {
        return view('Signup_page');
    }

    function userstate()
    {
        return view('user_state');
    }

function homepage()
{
    $special = User::where('user_type', 'special')->get();
    return view('homepage', compact('special'));
}

    function loginpost(Request $request)
    {
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            return redirect()->intended(route('homepage'));
        }
        
        return redirect(route('login'))->with("error", "Not Valid");
    }


function signuppost(Request $request)
{
    $request->validate([           
        'email' => 'required|email|unique:users',
        'password' => 'required'
    ]);

    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    $user = User::create($data);

    if (!$user) {
        return redirect(route('signup'))->with("error", "Not Valid");
    }

    Auth::login($user); // Log in the user after successful registration

    return redirect()->intended(route('userstate'))->with("success", "YAY!");
}

function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->intended(route('login'));
    }
    
    
    
public function userstatepost(Request $request)
{
    $request->validate([
        'user_type' => 'required'
    ]);

    $user = auth()->user();

    if ($user) {
        $user->user_type = $request->input('user_type');
        $user->save();

        if ($user->user_type == 'normal') {
            return redirect('normalusersignup');
        } else {
            return redirect('providersignup');
        }
    } else {
        // Handle the case where the user is not authenticated
        return redirect('login');
    }
}

    




}