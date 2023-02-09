<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function login(Request $r)
    {
        $data  = $r->input();
        $r->session()->put('user', $data['user']);
        return view('home');
    }

    public function logout(Request $r)
    {
        $r->session()->flush();
        return view('/home');
    }
}
