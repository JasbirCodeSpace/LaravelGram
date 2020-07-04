<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesContoller extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index',compact('user'));
    }
}
