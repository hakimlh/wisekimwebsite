<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return $request->all();
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
