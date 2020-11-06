<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App;

class PersonController extends Controller
{
    public function index()
    {
        $persons = App\Person::all();
        foreach ($persons as $person) {
            echo $person;
        }
    }

    public function register()
    {
        $person = App\Person::create(
            [
                'firstName' => 'Maria', 
                'lastName' => 'Dias',
                'dateOfBirth' => '1993-02-22',
                'gender' => 'F'
            ]
        );

        $user = App\User::create(
            [
                'username' => 'mDias',
                'email' => 'mdias@email.com',
                'active' => true,
                'password' => Hash::make('4321'),
                'person_id' => $person->id
            ]
        );

        echo $person;
        echo $user;
    }

    public function view($id)
    {
        $person = App\Person::find($id);
        echo $person;
        echo $person->user()->get();
    }
}
