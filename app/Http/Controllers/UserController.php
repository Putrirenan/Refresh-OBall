<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Type: user');
    }

    public function index()
    {
        if (Auth::user()->Type == 'user') {
            return view('dashboard.index');
        } else {
            abort(403);
        }
    }
}
