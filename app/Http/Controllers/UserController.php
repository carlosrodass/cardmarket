<?php

namespace App\Http\Controllers;

Use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     

     public function index() 
    {
        $var = DB::table('users')
        ->orderBy('id','desc')
        ->get();
        return $var;
    }

 
     public function show($role) //Esto es un metodo post
    {     
        $var = DB::table('users')
        -> where('role', '=', $role)
        ->get();
        return $var;
    }



}
