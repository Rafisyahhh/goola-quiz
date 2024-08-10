<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quiz;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quiz = quiz::all();
        return view('home',compact('quiz'));
    }
    public function admin()
    {
        $quiz = quiz::all();
        return view('admin.index',compact('quiz'));
    }
}
