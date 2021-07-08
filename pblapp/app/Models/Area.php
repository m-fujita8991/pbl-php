<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'TBL_area';
    use HasFactory;
    
    public function getArea(){
        return $this->area;
    }
    public function getFlag(){
        return $this->flag;
    }
}
