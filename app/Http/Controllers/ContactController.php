<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\ContactsMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index ()
    {
        return view('pages/contact');
    }

    public function sendMail(MailRequest $request)
    {
        $content = $request->get('content');
        $email = $request->get('email');
        $object = $request->get('object');

        Mail::send(new ContactsMail($object, $email, $content));

        return redirect(route('contacts'))->with(['success' => "L'email a bien été envoyé"]);
    }
}
