<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;

    //model eke nama newi nam api kiyanna ona me wage model eka hadenne me table ekata kiyala
    //protected  $table="posts";

    // primary key ekath ehama wenasnam kiyabba ona
    //protected $primaryKey ='post_id';

    protected $date=['deleted_at'];

    protected $fillable=[
        'title',
        'content'
    ];

    /*One to One Inverse */
    public function user(){
        return $this->belongsTo('App\User','user_main_id');
    }
}
