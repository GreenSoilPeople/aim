<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends BaseModel
{

    protected $fillable = [
        'code', 'name',
    ];
    protected $primaryKey = 'code';
    public $incrementing = false; // 'code'  is string 

}
