<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'tbl_school';
    public function getData()
    {
        return $this -> gakkoumei.$this -> kenmei;
    }
}
