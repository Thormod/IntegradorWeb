<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /*
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
        $blogs = Blog::orderBy('created_at', 'desc')->get();;
        return view('home', ['blogs' => $blogs]);
    }
    public function index2()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();;
        return view('layouts.all', ['blogs' => $blogs]);
    }
}
