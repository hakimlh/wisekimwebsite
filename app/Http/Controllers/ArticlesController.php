<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
use DB;

class ArticlesController extends Controller
{

    public function index()
    {
      // 1 : Eloquent

        // $articles = Article::all();
        // $articles = Article::whereTitle('Game of thrones')->get();

      // 2 : Query Builder

        // $articles = DB::table('articles')->get();
         $articles = DB::table('articles')->whereTitle('Game of thrones')->get();


        return $articles;
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        // 1 : Eloquent

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


        // 2 : Query Builder

        // DB::table('articles')->insert($request->except('_token')); // all data except _token input

        // or

        // DB::table('articles')->insert([
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
