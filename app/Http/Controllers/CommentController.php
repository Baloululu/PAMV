<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\EditCommentRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'store']);
    }

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
            $comments = Comment::with('user')->orderBy('validate')->get();
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
    public function store(EditCommentRequest $request)
    {
        Comment::create(
            [
                'content' => $request->get('content'),
                'user_id' => Auth::user()->id
            ]
        );

        $fcm_tokens = User::select('fcm_token')->notifiable()->pluck('fcm_token')->toArray();

        Fcm()
            ->to($fcm_tokens)
            ->notification([
                'title' => 'Nouveau commentaire',
                'body' => $request->get('content'),
            ])
            ->send();

        return redirect(route('livre.index'))->with(['success' => "Votre commentaire a bien été pris en compte et sera affiché dès qu'un administrateur l'aura validé."]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        if ($request->has('validate'.$id))
        {
            $comment->update(['validate' => true]);
            $message = "Le commentaire a bien été mis en ligne.";
        }
        else
        {
            $comment->update(['validate' => false]);
            $message = "Le commentaire a été retiré du site.";
        }

        return redirect(route('livre.index'))->with(['success' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect(route('livre.index'))->with(['success' => "Le commentaire a bien été supprimé."]);
    }
}
