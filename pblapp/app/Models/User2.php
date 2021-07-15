<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';
    public function getData()
    {
        return $this -> sankasyananba. ',' .$this -> sankasyagakka. ',' .$this -> gakkoumei. ',' .$this -> gakunen. ',' .$this -> kisotu. ',' .$this -> full. ',' .$this -> name. ',' .$this -> name_hurigana. ',' .$this -> sankakaisuu. ',' .$this -> taisyounendo. ',' .$this -> gohitensuu. ',' .$this -> memo. ',' .$this -> birth;
    }
    public function getsankasyaNO(){
        return $this->sankasyananba;
    }
    public function getName(){
        return $this->name;
    }
    public function getHurigana(){
        return $this->name_hurigana;
    }
    public function getGakkoumei(){
        return $this->gakkoumei;
    }
    public function getBirth(){
        return $this->birth;
    }
    public function getKisotu(){
        return $this->kisotu;
    }
}
