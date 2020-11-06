<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = ['id', 'firstName', 'lastName', 'dateOfBirth', 'gender'];
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
