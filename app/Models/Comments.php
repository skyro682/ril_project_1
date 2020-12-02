<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $table = 'comments';
    protected $primary_key = 'id';
    protected $fillable = ['content'];
    public $timestamp = true;

    public function Posts(){
        $this->belongsTo('posts');
    }

    public function Users(){
        $this->belongTo('users');
    }
    
}