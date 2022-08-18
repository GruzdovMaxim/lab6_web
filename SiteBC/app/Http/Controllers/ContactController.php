<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMail;


class ContactController extends Controller
{
    public function send(Request $req)
    {
        $c1 = new ContactMail();
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|min:10|max:600',
       ]);
       $c1-> name = $req->input('name');
       $c1-> email = $req->input('email');
       $c1-> phone = $req->input('phone');
       $c1-> message = $req->input('message');

    $c1 -> save();
    return redirect('contact')->with('success', 'The message has been sent!' );

    }
}
