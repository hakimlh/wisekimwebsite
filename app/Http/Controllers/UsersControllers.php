<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\User;

class UsersControllers extends Controller
{
   public function index(){
     $users = User::paginate(10);
     // return $users;
     return view("pages.profile",compact('users'));

   }
}
