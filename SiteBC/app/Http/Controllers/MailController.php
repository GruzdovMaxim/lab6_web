<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newsletter;
use App\Http\Controllers\PagesController;
use App\Models\EmailSub;

class MailController extends Controller
{   public function getEmail(Request $req){
        $es1 = new EmailSub(); 
        $validated = $req->validate([
            'email_string' => 'required|email|unique:email_subs,email',
        ]); 
        $get_email = $req->input('email_string');
        $es1-> email = $get_email;
        $es1 -> save();
    
        Mail::to($get_email)->send(new Newsletter());
         return redirect('main')->with('success', 'Success' );
    }
}
