<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale(config('app.locale'));
        $newComment = new Comment();
        if (Auth::check() && Auth::user()->isAdmin())
            $comments = Comment::with('user')->get();
        else
            $comments = Comment::with('user')->published()->get();
        return view('pages/comments/livre', compact('newComment', 'comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = Comment::create(
            [
                'content' => $request->get('content'),
                'user_id' => Auth::user()->id
            ]
        );
        return redirect(route('livre.index'))->with(['success' => "Votre commentaire a bien été pris en compte et sera affiché dès qu'un administrateur l'aura validé."]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request);
        return redirect(route('livre.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('livre.index'))-with(['succes' => "Votre commentaire a bien été supprimé."]);
    }
}
