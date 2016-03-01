<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Requests\AtticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\CreateArticle;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index')->with('articles', $articles);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticle $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }
}
