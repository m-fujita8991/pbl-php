<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pblcontroller extends Controller
{
    public function participant(){
        return view('student.questionnaire');

    }

    public function participant2(){
        return view('student.questionnaire2');

    }

    public function sankasyaNo(){
        return view('student.sankasyaNo');

    }

    public function sankahyou(){
        return view('student.sankahyou');

    }

    public function sankahyoukakunin(){
        return view('student.sankahyoukakunin');

    }

    public function koutuuhi(){
        return view('student.koutuuhi');

    }

    public function uketukeowari(){
        return view('student.uketukeowari');

    }

    public function uketukeowari2(){
        return view('student.uketukeowari2');

    }
}
