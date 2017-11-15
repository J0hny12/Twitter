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

	public function storeComment(Tweet $tweet)
	{
		Comment::create([
			'user_id' => Auth::user()->id,
			'tweet_id' => $tweet->id,
			'body' => request('body')
		]);

		return back();
	}

	public function deleteComment(Comment $comment)
	{
		if(Auth::id() == $comment->user_id) {
			$comment->delete();
		}

		return back();
	}

}
