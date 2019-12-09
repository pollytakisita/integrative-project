<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionEvent extends Model
{
    protected $table = 'actions_events';
    protected $dates=['date'];
    protected $fillable = [
    'title', 'description', 'address', 'district', 'city', 'uf',
       'date', 'image', 'id_ong'
    ];

    public $timestamps = false;

    public function ongs()
     {
         return $this->belongsTo('App\Ong', 'id');
     }

     public function users(){
        return $this->belongsToMany('App\User', 'action_event_has_user', 'id_action_event', 'id_user');
      }
}
