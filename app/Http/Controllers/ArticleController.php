<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\EditArticleRequest;
use Carbon\Carbon;

class ArticleController extends Controller
{

    use ArticleTrait;

    public function __construct()
    {
        $this->middleware('admin')->except(['bracelets', 'colliers', 'pierres', "boucles", "clefs", "entretient", 'show', 'index']);
    }

    public function index()
    {
        return view('pages/accueil');
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
        return $this->page('Boucles', "Boucles d'oreilles");
    }

    public function clefs()
    {
        return $this->page('Clefs', "Porte-clefs");
    }

    private function page($page, $name = null)
    {
        Carbon::setLocale(config('app.locale'));
        return view('pages/articles/all', $this->pageArticle($page, $name));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/articles/create', $this->createArticle());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditArticleRequest $request)
    {
        return redirect(route('articles.edit', $this->storeArticle($request)))->with(['success' => "L'article a bien été créer"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view ('pages/articles/show', $this->showArticle($article));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('pages/articles/edit', $this->editArticle($article));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(EditArticleRequest $request, Article $article)
    {
        return redirect(route('articles.edit', $this->updateArticle($request, $article)))->with(['success' => "L'article a bien été mis à jour"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $this->destroyArticle($article);
        return redirect(route('accueil'));
    }
}