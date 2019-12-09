<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OngHasUser extends Model
{
    protected $table = 'ong_has_user';
    protected $fillable = [
        'id_user', 'id_ong', 'permission_level'
    ];

    public $timestamps = false;

}
