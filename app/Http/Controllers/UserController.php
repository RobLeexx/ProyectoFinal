<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($name){
        //$user = \DB::table('users')->where('name', $name)->first();
        return view('users', ['user' => User::where('name', $name)->firstOrFail()]);
    }
}
