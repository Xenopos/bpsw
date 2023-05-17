<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;    
use \App\Http\Controllers\ServiceProviderController;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Use the query to search for users in the database
        $users = User::where('companyname', 'like', '%' . $query . '%')->get();

        return view('search', ['users' => $users]);
    }
}
