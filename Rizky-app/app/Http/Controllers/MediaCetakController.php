<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaCetakController extends Controller
{
    // public function dashboard()
    // {
    //     return view('MediaCetak', [
    //         "title" => "Dashboard"
    //     ]);
    // }

    public function dash()
    {
        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    }

    public function poster()
    {
        return view('poster', [
            "title" => "Poster"
        ]);
    }

    public function leaflet()
    {
        return view('leaflet', [
            "title" => "Leaflet"
        ]);
    }
}
