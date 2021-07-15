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
}
