<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pblcontroller extends Controller
{
    public function participant(){
        return view('student.participant');

    }
}
