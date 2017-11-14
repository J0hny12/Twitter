<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
	public function store(Tweet $tweet)
	{

		Comment::create([
			'user_id' => Auth::user()->id,
			'tweet_id' => $tweet->id,
			'body' => request('body')
		]);

		return back();

	}

}
