<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Posts;

class Comments extends Model
{

    protected $table = 'comments';
    protected $primary_key = 'id';
    protected $fillable = ['content'];
    public $timestamp = true;

    public function Posts(){
        return $this->belongsTo(Posts::class, 'posts_id');
    }

    public function Users(){
        return $this->belongsTo(User::class, 'users_id');
    }
    
}