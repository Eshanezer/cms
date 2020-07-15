<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey='user_main_id';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*One to One */
    public function post(){
       // return  $this->hasOne('App\Post');
        return  $this->hasOne('App\Post','user_main_id');
    }

    /*One to Many*/
    public function posts(){
        return $this->hasMany('App\Post','user_main_id');
    }
    /*Many to Many*/
    public function roles(){
        return $this->belongsToMany('App\Role');
        //return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }


    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }
}
