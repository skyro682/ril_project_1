<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Symfony\Component\Console\Helper\Table;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

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
        return $this->hasMany('comments');
    }
    
    public function Posts(){
        return $this->hasMany('posts');
    }

    public function Grade(){
        return $this->belongsTo('grade');
    }


    /**
     * @param string $email
     * @return User/null
     * 
     */
    public static function getOneUserByEmail(string $email){
        $user = DB::table('users')->where('email',$email)->first();


        if(!empty($user)) return new User(get_object_vars($user));

        return null;
    }       


    /**
     * @param string $username
     * @return array/null
     * 
     */
    public static function getOneUserByUsername(string $username){
        $user = DB::table('users')->where('username',$username)->first();


        if(!empty($user)) return new User(get_object_vars($user));

        return null;
    }       


    
    /**
     * @param  string $password
     * @return User/null
     * 
     */
    public static function checkAuthPassword($user, string $password){

        $user = DB::table('users')->where([['email', $user->email],['password',$password]])->first();

        if(!empty($user)) return new User(get_object_vars($user));

        return null;
    }    
      
}
