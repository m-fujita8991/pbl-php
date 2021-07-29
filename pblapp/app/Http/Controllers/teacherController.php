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
use Illuminate\Database\Eloquent\Collection;

class teacherController extends Controller
{
    public function login(){
        return view('teacher.login');

    }

    public function list(){
        $item1 = User2::all();
        $item2 = Humcnt::all();
        $param =['item1'=>$item1,'item2'=>$item2];
        return view('teacher.list',$param);
    }

    public function confirm(Request $request){
        if($request->hidden == 1){
        $item = User2::where("sankasyananba",$request->hide)->first();
        $param = ["item" => $item];
        return view('teacher.confirm',$param);
        }else{
            $text = $request->note;
            $user = User2::where('sankasyananba',$request->hide)->first();
            $user->memo = $text;
            $user->timestamps = false; 
            $user->save();
            $item1 = User2::all();
            $item2 = Humcnt::all();
            $param =['item1'=>$item1,'item2'=>$item2];
            return view('teacher.list',$param);
        }
    }

    public function score(){
        return view('teacher.score');

    }
}
