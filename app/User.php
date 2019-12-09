<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'occupation', 'biography','areas',
        'district', 'city', 'uf', 'avatar'
    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ongs(){
      return $this->belongsToMany('App\Ong', 'ong_has_user', 'id_user', 'id_ong')->withPivot(['permission_level']);
    }

    public function actionsEvents(){
        return $this->belongsToMany('App\ActionEvent', 'action_event_has_user', 'id_user', 'id_action_event');
      }




}
