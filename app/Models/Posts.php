<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $table = 'posts';
    protected $primary_key = 'id';
    protected $fillable = ['content', 'spotify_id'];
    public $timestamp = true;

    public function Comments(){
        $this->hasMany('comments');
    }

    public function Users(){
        $this->belongTo('users');
    }
    
}