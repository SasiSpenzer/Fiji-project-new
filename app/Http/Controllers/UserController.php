<?php

namespace App\Http\Controllers;

use Auth;

/*
 * Sasi Spenzer 2019
 */

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return v
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('pages.admin.home');
        }

        return view('pages.user.home');
    }
}
