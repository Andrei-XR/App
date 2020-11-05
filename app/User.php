<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['id', 'username', 'email', 'active', 'person_id'];
    public $timestamps = false;
}
