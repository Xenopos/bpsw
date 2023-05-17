<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NormalUserController;
use App\Models\User;
use \App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;


class ServiceProviderController extends Controller
{

    function providersignup()
    {
        return view('Provider_Signup_edit');
    }

    function providerprofileeditpage()
    {
        return view('providerprofileedit_page');
    }

    public function providersprofiles()
    {
        return view('providersprofiles');
    }

public function providerprofileoverview($user_id)
{
    $user = User::find($user_id);
    return view('providerprofileoverview', ['user' => $user]);
}



    function providerprofilepage()
    {
        return view('providerprofilepage');
    }

    
function providersignuppost(Request $request)
{
    $request->validate([
        'companyname' => 'required',
        'owner' => 'required',
        'companydescription' => 'required',
        'address' => 'required',
        'contactnumber' => 'required',
        'services' => 'required',
    ]);

    $user = Auth::user();

    $user->companyname = $request->companyname;
    $user->owner = $request->owner;
    $user->companydescription = $request->companydescription;
    $user->address = $request->address;
    $user->contactnumber = $request->contactnumber;
    $user->services = $request->services;
    $user->logo = $request->logo;


    $user->save();

    if ($user) {
        return redirect()->intended(route('homepage'))->with("success", "User created successfully.");
    } else {
        return redirect(route('providersignup'))->with("error", "Failed to create user.");
    }
}

function providerprofileeditpagepost(Request $request)
{

    $request->validate([
        'companyname' => 'required|max:255',
        'companydescription' => 'required',
        'address' => 'required',
        'contactnumber' => 'required',
        'owner' => 'required',
    ]);

    $user = Auth::user();

    $user->companyname = $request->input('companyname');
    $user->companydescription = $request->input('companydescription');
    $user->address = $request->input('address');
    $user->contactnumber = $request->input('contactnumber');
    $user->owner = $request->input('owner');
    $user->save();

    return view('providerprofilepage', ['user' => $user])->with('success', 'Profile updated successfully.');
}


}