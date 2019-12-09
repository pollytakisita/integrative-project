<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable =[
        'id_ong', 'name', 'image'

     ];

     public $timestamps = false;

     public function ongs()
     {
         return $this->belongsTo('App\Ong', 'id');
     }
}
