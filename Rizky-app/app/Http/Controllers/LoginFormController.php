<?php

namespace App\Http\Controllers;

use App\Models\loginform;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginFormController extends Controller
{
    public function login()
    {
        return view('LoginForm', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {   
        $validatedLogin = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validatedLogin)) {
            $request->session()->regenerate();
            return redirect()->route('/mediacetak');
        }

        return back('/loginform')->withErrors([
            'email' => 'email error'
        ]);
        // $validatedLogin['Password'] = Hash::make($validatedLogin['Password']); // <- Untuk acak password register
    }
}
