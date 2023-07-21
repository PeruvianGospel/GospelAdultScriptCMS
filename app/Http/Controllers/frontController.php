<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('front/inicio');
    }
    public function video(){
        return view('front/video');
    }
}
