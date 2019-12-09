<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $fillable =[
        'segment'
    ];   
    
    public $timestamps = false;
}
