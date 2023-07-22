<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
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


    /** GESTION DE VIDEOS Y PUBLICACION  */
    public function videos(){
        $videos = video::paginate(10);
        return view('dashboard/videos')->with('videos',$videos);
    }

    public function publicar_video(){
        return view('dashboard/publicar_video');    
    }
    /** FIN GESTION DE VIDEO Y PUBLICACION  */
    public function stars(){
        return view('dashboard/pornstar');
    }
    public function categorias(){
        return view('dashboard/categorias');
    }
}



