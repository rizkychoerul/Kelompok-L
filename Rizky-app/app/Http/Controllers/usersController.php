<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function user()
    {
        $data = collect(DB::table('users')->get());
        return view('users', [
            'title' => 'Users',
            'users' => $data
        ]);
    }

    public function insertuser()
    {
        return view('insertuser');
    }
}
