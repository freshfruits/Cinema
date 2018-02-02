<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(User $user)
    {
        return view('user.profile', ['user' => $user]);
    }

    /**
     * Display dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('user.index');
    }


}
