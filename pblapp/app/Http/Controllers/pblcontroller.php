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
            $number = 'OC';
            $now = date('Ymj',time());
            $now1 = date('Y-m-j',time());
            $fp = fopen( "data.txt", "r");
            $data = fgets($fp);
            fclose($fp);
            $fx = fopen( "data.txt","w");
            $data++;
            fwrite($fx,$data);
            fclose($fx);
            $number = $number.$now.sprintf('%03d',$data);
            $school = School::where('kenmei','岡山県')->get();
            $department = Type::all();
            $param =['item'=>"",'number'=>$number,'now' => $now1,'school'=>$school,'department'=>$department];
            return view('student.sankahyou',$param);
        }elseif($request->student == 0){
            $now1 = date('Y-m-j',time());
            $matchThese = ['sankasyananba' => $request->name,'birth' => $request->calendar];
            $department = Type::all();
            $item = User2::where($matchThese)->first();
            if($item == null){
                return redirect('sankasyaNo');
            }
            $param =['item'=>$item,'now'=>$now1,'department'=>$department];
            return view('student.sankahyou',$param);
        }
    }
            //$item = User2::select('select * from tbl_user');
            //$item = User2::all();
    public function sankahyoukakunin(Request $request){
        if($request->hide ==0){
            $user = new User2;
            $user->sankasyananba =$request->number;
            $user->sankasyagakka =$request->gakka;
            $user->gakkoumei =$request->school;
            $user->gakunen =$request->grade;
            $user->kisotu =$request->department;
            $user->ko_su=$request->course;
            $user->name =$request->name;
            $user->name_hurigana=$request->hurigana;
            $user->sankakaisuu=1;
            //生徒の対象年度のプログラム必要
            $user->taisyounendo =2021;
            $user->gohitensuu =0;
            $user->memo ="";
            $user->birth =$request->birth;
            $user->timestamps = false; 
            $user ->save();
        }else{
            
            $user = User2::where('sankasyananba',$request->number)->first();
            // var_dump($user);
            $user->gakunen = $request->grade;
            $user->sankasyagakka =$request->gakka;
            $user->ko_su=$request->course;
            $user->timestamps = false; 
            $user->save();

        }
        $param =['item'=>$user];
        return view('student.sankahyoukakunin',$param);
    }

    public function koutuuhi(){
        return view('student.koutuuhi');

    }

    public function uketukeowari(Request $request){
        $value = $request->student;
        $param = ['value'=>$value];
        return view('student.uketukeowari',$param);

    }
}
