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

        $articles = Article::paginate(10);
        // $articles = Article::whereTitle('Game of thrones')->get();

      // 2 : Query Builder

        // $articles = DB::table('articles')->get();
         // $articles = DB::table('articles')->whereTitle('Game of thrones')->get();


        return view('/articles.index',compact('articles'));
    }
    public function create()
    {
        return view('/articles.create');
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
        $article = Article::findOrFail($id);
        return view('/articles.show',compact('article'));


    }
    public function edit($id)
    {
      $article = Article::findOrFail($id);
      return view('/articles.edit',compact('article'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles/show');
    }
    public function destroy($id)
    {
      // Article::destroy($id); // Article::destroy([1,2,3,...]);

       // or

      $article = Article::findOrFail($id);
      $article->delete(); // $article->forceDelete();

      return redirect('/articles');


    }
}
