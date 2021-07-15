<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function login(){
        return view('teacher.login');

    }

    public function list(){
        return view('teacher.list');
        
    }

    public function confirm(){
        return view('teacher.confirm');

    }

    public function score(){
        return view('teacher.score');

    }
}
