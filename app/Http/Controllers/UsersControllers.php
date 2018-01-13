<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\User;

class UsersControllers extends Controller
{
   public function profile($username){

     $user = User::whereUsername($username)->first();
     return view("pages.profile",compact('user'));

   }
}
