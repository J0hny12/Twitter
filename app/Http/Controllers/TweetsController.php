<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    

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

}
