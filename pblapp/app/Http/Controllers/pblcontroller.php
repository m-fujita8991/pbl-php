<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pblcontroller extends Controller
{
    public function participant(){
        return view('student.questionnaire');
    }

    public function participant2(Request $request){
        $value = $request->where;
        if($value == 1){
            $data = ['msg'=>'近くの職員にお知らせください',];
            return view('student.questionnaire_results',$data);
        }else{
            $data = ['msg'=>'',];
            return view('student.questionnaire2',$data);
        }

    }
    public function questionnaire_results(Request $request){
        $value = $request->student;
        if($value == 1){
            $data = ['msg'=>'近くの職員にお知らせください',];
            return view('student.questionnaire_results',$data);
        }else{
            $data = ['msg'=>'',];
        }
        
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
}
