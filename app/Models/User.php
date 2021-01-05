<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Grade;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'users';

    /**
     * The attributes that are mass 
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'last_name', 'email',
    ];

    /**
     * The attributes excluded fassignable.
     *rom the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public $timestamp = true;

    public function Comments(){
        return $this->hasMany(Comments::class);
    }
    
    public function Posts(){
        return $this->hasMany(Posts::class);
    }

    public function Grade(){
        return $this->belongsTo(Grade::class, 'grade_id');
    }
}
