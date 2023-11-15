<?php

namespace App\Http\Controllers;

use App\Models\lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = lecturer::all();

        dd($lecturers);
    }
}
