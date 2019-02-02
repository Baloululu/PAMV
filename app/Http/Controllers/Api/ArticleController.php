<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Controllers\ArticleTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    use ArticleTrait;

    public function __construct()
    {
        $this->middleware('scope:admin')->except(['bracelets', 'colliers', 'pierres', "boucles", "clefs", "entretient", 'show', 'fcm']);
    }

    public function bracelets()
    {
        return $this->page('Bracelets');
    }

    public function colliers()
    {
        return $this->page('Colliers');
    }

    public function pierres()
    {
        return $this->page('Pierres');
    }

    public function boucles()
    {
        return $this->page('Boucles');
    }

    public function clefs()
    {
        return $this->page('Clefs');
    }

    private function page($page, $name = null)
    {
        return response()->json($this->pageArticle($page, $name), 200);
    }

    public function create()
    {
        return response()->json($this->createArticle(), 200);
    }

    public function store(EditArticleRequest $request)
    {
        return response()->json($this->storeArticle($request), 200);
    }

    public function show(Article $article)
    {
        return response()->json($this->showArticle($article), 200);
    }

    public function edit(Article $article)
    {
        return response()->json($this->editArticle($article), 200);
    }

    public function update(EditArticleRequest $request, Article $article)
    {
        return response()->json($this->updateArticle($request, $article), 200);
    }

    public function destroy(Article $article)
    {
        $this->destroyArticle($article);
        return response()->json(['success' => 'Article supprime'], 200);
    }
}
