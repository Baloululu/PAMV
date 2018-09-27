<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\EditArticleRequest;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['bracelets', 'colliers', 'pierres', 'show']);
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

    private function page($page)
    {
        $articles = Category::where('name', $page)->first()->articles;
        return view('pages/articles/all', compact('page', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        $categories = Category::pluck('name', 'id');
        return view('pages/articles/create', compact('article', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditArticleRequest $request)
    {
        $path = $this->uploadImage($request->file('image'));

        $article = Article::create(
            [
                'title' => $request->get('title'),
                'image' => $path,
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id')
            ]
        );
        return redirect(route('article.edit', $article))->with(['success' => "L'article a bien été créer"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $page = $article->category->name;
        return view ('pages/articles/show', compact('article', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $page = $article->category->name;
        $categories = Category::pluck('name', 'id');
        return view('pages/articles/edit', compact('article', 'page', 'categories'));
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
        if ($request->hasFile('image'))
        {
            $path = $this->uploadImage($request->file('image'));
            $article->update([
                'title' => $request->get('title'),
                'image' => $path,
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id')
            ]);
        }
        else
            $article->update([
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id')
            ]);
        return redirect(route('article.edit', $article))->with(['success' => "L'article a bien été mis à jour"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        unlink($article->image);
        $article->delete();
        return redirect(route('accueil'));
    }

    public function uploadImage(UploadedFile $file)
    {
        $path = 'img/articlesImg/'.$file->getClientOriginalName();

        Image::make($file)
//            ->oriented()
            ->resize(500, null, function ($constraint){
                $constraint->aspectRatio();
            })
            ->interlace(true)
            ->save($path, 75);

        return $path;
    }
}