<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    protected $table = 'grade';
    protected $primary_key = 'id';
    protected $fillable = ['name'];
    public $timestamp = true;

    public function Users(){
        return $this->hasMany('users');
    }

}