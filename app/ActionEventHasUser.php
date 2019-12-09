<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionEventHasUser extends Model
{
    protected $table = 'action_event_has_user';
    protected $fillable = [
        'id_action_event', 'id_user'
    ];

    public $timestamps = false;


}
