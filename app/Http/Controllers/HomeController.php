<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $EONET = Http::get('https://api.nasa.gov/planetary/apod?api_key=bRIfQY9YpgBfplhhtZzsE9KMrqHNbRbsWJ2gnqeY');
        $EONETdata = $EONET->json();
        
        // $si = 0;
        // foreach ($EONETdata as $data) {
            
        //    $si =  $EONETdata;
        //    dd($si['title']);
        // }

        return view('home', compact('EONETdata'));
    
    }
}
