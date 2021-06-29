<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pblcontroller extends Controller
{
    public function login(){
        return view('teacher.login');

    }

    public function participant(){
        return view('participant');

    }
}
