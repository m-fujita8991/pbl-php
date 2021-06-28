<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pblcontroller extends Controller
{
    public function start(){
        return view('start');

    }

    public function participant(){
        return view('participant');

    }
}
