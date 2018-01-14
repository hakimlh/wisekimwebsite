<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class ArticlesController extends Controller
{

    public function index()
    {
        //
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        // $article = new Article;
        // $article->title = $request->title;
        // $article->content = $request->content;
        // $article->user_id = Auth::user()->id;
        // $article->save();

        // Or

        Article::create($request->all());

        // Or

        // Article::create([
        //   'title' => $request->title,
        //   'content' => $request->content,
        //   'user_id' => Auth::user()->id
        // ]);

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {
        //
    }
}
