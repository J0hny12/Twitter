<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function showSettings()
    {
    	$user = Auth::user();
    	return view('settings', compact('user'));	
    }

    public function updateSettings(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required|same:password',
    		'password_confirm' => 'required|same:password',
    	]);

    	$user = Auth::user();
    	$user->update([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password)
    	]);

    	return back();
    }

}
