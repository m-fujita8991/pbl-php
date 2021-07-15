<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\Cnt;
use App\Models\Humcnt;
use App\Models\Login;
use App\Models\Reception;
use App\Models\School;
use App\Models\Type;
use App\Models\User2;
use App\Models\Yn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            return view('student.sankasyaNo');
        }
        
    }

    public function sankasyaNo(){
        return view('student.sankasyaNo');

    }

    public function sankahyou(Request $request){
        if($request->student == 1){
            //参加者ナンバー自動生成
            $param =['item'=>'',];
            return view('student.sankahyou',$param);
        }elseif($request->student == 0){
            $matchThese = ['sankasyananba' => $request->name,'birth' => $request->calendar];
            $item = User2::where($matchThese)->first();
            if($item == null){
                return redirect('sankasyaNo');
            }
            $param =['item'=>$item,];
            return view('student.sankahyou',$param);
        }
    }
            //$item = User2::select('select * from tbl_user');
            //$item = User2::all();
    public function sankahyoukakunin(){
        return view('student.sankahyoukakunin');

    }

    public function koutuuhi(){
        return view('student.koutuuhi');

    }

    public function uketukeowari(){
        return view('student.uketukeowari');

    }
}
