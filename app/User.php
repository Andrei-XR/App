<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['id', 'username', 'email', 'active', 'password', 'person_id'];
    protected $hidden = ['password'];
    public $timestamps = false;
}
