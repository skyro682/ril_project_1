<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comments;

class Posts extends Model
{

    protected $table = 'posts';
    protected $primary_key = 'id';
    protected $fillable = ['content', 'spotify_id'];
    public $timestamp = true;

    public function Comments(){
        return $this->hasMany(Comments::class);
    }

    public function Users(){
        return $this->belongsTo(User::class, 'users_id');
    }
    
}