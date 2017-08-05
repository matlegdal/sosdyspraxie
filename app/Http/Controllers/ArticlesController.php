<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::all();
    	return view('articles/index', compact('articles'));
    }

    public function show(Article $article)
    {
    	return view('articles/show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles/edit', compact('article'));
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store()
    {
        $this->validate(request(), [
                'title' => 'required',
                'body' => 'required'
        ]);

        Article::create(request(['title', 'body']));
        
        return redirect('/articles');
    }
}
