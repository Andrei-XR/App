<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UserController extends Controller
{
    public function index()
    {
        $users = App\User::all();

        foreach ($users as $user) {
            echo $user;
        }
    }
}
