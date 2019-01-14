<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\EditArticleRequest;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait ArticleTrait
{

    public function pageArticle($page)
    {
        $articles = Category::where('name', $page)->first()->articles;
        return compact("page", 'articles');
    }

    public function createArticle()
    {
        $article = new Article();
        $categories = Category::pluck('name', 'id');
        return compact('article', 'categories');
    }

    public function storeArticle(EditArticleRequest $request)
    {
        $path = $this->uploadImage($request->file('image'));

        $article = Article::create(
            [
                'title' => $request->get('title'),
                'image' => $path,
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id'),
                'intro' => $request->get('intro')
            ]
        );
        return $article;
    }

    public function showArticle(Article $article)
    {
        $page = $article->category->name;
        return compact('article', 'page');
    }

    public function editArticle(Article $article)
    {
        $page = $article->category->name;
        $categories = Category::pluck('name', 'id');
        return compact('article', 'page', 'categories');
    }

    public function updateArticle(EditArticleRequest $request, Article $article)
    {
        if ($request->hasFile('image'))
        {
            if (file_exists($article->image))
                unlink($article->image);

            $path = $this->uploadImage($request->file('image'));
            $article->update([
                'title' => $request->get('title'),
                'image' => $path,
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id'),
                'intro' => $request->get('intro')
            ]);
        }
        else
            $article->update([
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id'),
                'intro' => $request->get('intro')
            ]);
        return $article;
    }

    public function destroyArticle(Article $article)
    {
        if (file_exists($article->image))
            unlink($article->image);
        $article->delete();
    }

    private function uploadImage(UploadedFile $file)
    {
        if (!file_exists('img/articlesImg'))
            mkdir('img/articlesImg');

        $path = 'img/articlesImg/'.$file->getClientOriginalName();

        Image::make($file)
            ->oriented()
            ->resize(500, null, function ($constraint){
                $constraint->aspectRatio();
            })
            ->interlace(true)
            ->save($path, 75);

        return $path;
    }

}