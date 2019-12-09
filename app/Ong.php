<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{

    protected $fillable =[
       'name', 'segment', 'description', 'address', 'district', 'city', 'uf',
       'phone1', 'phone2', 'email', 'website1', 'website2',
       'website3', 'website4', 'avatar'

    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User', 'ong_has_user', 'id_ong', 'id_user')->withPivot(['permission_level']);
    }

    public function galleries()
    {
        return $this->hasMany('App\Gallery', 'id_ong');
    }

    public function actionsEvents()
    {
        return $this->hasMany('App\ActionEvent', 'id_ong');
    }
}
