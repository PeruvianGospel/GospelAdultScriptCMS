<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashController extends Controller
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
        return view('dashboard/dashboard');
    }
    public function videos(){
        return view('dashboard/videos');
    }
    public function stars(){
        return view('dashboard/pornstar');
    }
    public function categorias(){
        return view('dashboard/categorias');
    }
}
