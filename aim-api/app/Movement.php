<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends BaseModel
{

    protected $fillable = [
        'dealer_id', 'sdd_id', 'in_out', 'note'
    ];

}
