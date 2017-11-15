<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() 
	{
		return redirect('/dashboard/'. Auth::id());
	}

	public function create() 
	{
		return view('tweets.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'body' => 'required'
		]);

		Tweet::create([
			'user_id' => auth()->id(),
			'title' => request('title'),
			'body' => request('body')
		]);

		return redirect('/dashboard');
	}

	public function showUserDashboard(User $user)
	{
		$tweets = Tweet::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
		$users = User::all();

		return view('tweets.index', compact('tweets', 'users'));
	}

	public function delete(Tweet $tweet) 
	{
		if ($tweet->user_id == Auth::id()) {
			$tweet->delete();
		}		

		return back();
	}

	public function showEdit(Tweet $tweet) 
	{
		if (Auth::id() == $tweet->user_id) {
			return view('tweets.update', compact('tweet'));
		}

		return back();
	}

	public function update(Tweet $tweet, Request $request) 
	{
		$request->validate([
			'title' => 'required',
			'body' => 'required'
		]);

		$tweet->update([
			'title' => $request->title,
			'body' => $request->body
		]);

		return redirect('/dashboard');
	}

}
