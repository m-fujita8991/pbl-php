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
        $item = User2::get();
        $param =['item'=>$item,];
        return view('teacher.list',$param);
    }

    public function confirm(){
        return view('teacher.confirm');

    }

    public function score(){
        return view('teacher.score');

    }
}
