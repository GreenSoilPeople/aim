<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdd extends BaseModel
{

    protected $fillable = [
        'sn', 'in', 'out'
    ];
    protected $primaryKey = 'sn';
    public $incrementing = false; // 'code'  is string 

}
