<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;    
use \App\Http\Controllers\ServiceProviderController;
use \App\Http\Controllers\SearchController;


class NormalUserController extends Controller
{
    function normalusersignup()
    {
        return view('Normaluser_Signup_edit');
    }

    function normaluserprofileoverview()
    {
        return view('normaluseroverview');
    }

    function normaluserprofileedit()
    {
        return view('normaluserprofileedit_page');
    }

    function normaluserpage()
    {
        return view('normaluserpage');
    }

    function normalusersignuppost(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'full_name' => 'required',
            'birthdate' => 'required',
            'contactnumber' => 'required',
            //'logo' => 'required',
            'bio' => 'required',
        ]);
    
        $data = [
            'username' => $request->username,
            'full_name' => $request->full_name,
            'birthdate' => $request->birthdate,
            //'address' => $request->address,
            'contactnumber' => $request->contactnumber,
           // 'logo' => $request->logo,
            'bio' => $request->bio,
        ];
    
        $user = Auth::user();
        
        // Update the user model with the new user type value
        $user->username = $request->username;
        $user->full_name = $request->full_name;
        $user->birthdate = $request->birthdate;
        //$user->address = $request->address;
        $user->contactnumber = $request->contactnumber;
        $user->bio = $request->bio;
       // $user->logo = $request->logo;
        
        // Save the user model to the databaser
        $user->save();
        
        if ($user->save()) {
                return redirect()->intended(route('homepage'))->with("success", "User created successfully.");
            } else {
                return redirect(route('normalusersignup'))->with("error", "Failed to create user.");
            }
    }

    function normaluserprofileeditpost(Request $request)
    {
    $request->validate([
        'bio' => 'required|max:255',
        'username' => 'required',
        'full_name' => 'required',
        'contactnumber' => 'required',
    ]);


    $user = Auth::user(); // assuming you're using Laravel's built-in authentication system

    $user->bio = $request->input('bio');
    $user->username = $request->input('username');
    $user->full_name = $request->input('full_name');
    $user->contactnumber = $request->input('contactnumber');
    $user->save();

    return view('normaluserpage', ['user' => $user])->with('success', 'Profile updated successfully.');
    }

}

