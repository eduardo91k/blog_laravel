<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user = Auth::User();
        if ($user->types == 'admin') {
            # code...
            return view('admin.home');
        } else {
            # code...
            return view('home');
        }*/
        return view('admin.home');
    }
}
