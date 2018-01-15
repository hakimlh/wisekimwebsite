<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ArticleUserController extends Controller
{
    public function index($user_id)
    {
        $articles = User::find($user_id)->articles;
        return view('articles.showMine',compact('articles'));
    }
}
