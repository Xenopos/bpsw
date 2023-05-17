<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CommentController extends Controller
{

public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'comment' => 'required',
    ]);

    // Create a new comment instance
    $comment = new Comment();
    $comment->user_id = Auth::id();
    $comment->comment = $request->input('comment');

    // Save the comment
    $comment->save();

    // Get the user for the provider name
    $user = Auth::user();

    // Pass data to the view and render it
    $html = View::make('editcomment')->with('user', $user)->render();

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Comment added successfully')->with('html', $html);
}

}
