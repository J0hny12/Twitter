<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function store(Tweet $tweet)
	{
		Comment::create([
			'user_id' => Auth::user()->id,
			'tweet_id' => $tweet->id,
			'body' => request('body')
		]);

		return back();
	}

	public function delete(Comment $comment)
	{
		if(Auth::id() == $comment->user_id) {
			$comment->delete();
		}

		return back();
	}

}
