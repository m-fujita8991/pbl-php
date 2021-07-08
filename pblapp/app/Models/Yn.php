<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yn extends Model
{
    use HasFactory;
    protected $table = 'tbl_yn';
    public function getData()
    {
        return $this -> gouhitensuu.$this -> reason.$this -> sankasyananba.$this -> sankadate;
    }
}
