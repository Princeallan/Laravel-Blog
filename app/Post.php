<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable=[
    		'title',
    		'body',
    		'user_id'
    ];
   
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

//    public function  getTitleAttribute($value){
//        return  strtoupper($value);
//    }

    public function scopeRemoved($query){
        return $query->withTrashed()->orderBy('deleted_at','desc');
    }
}
