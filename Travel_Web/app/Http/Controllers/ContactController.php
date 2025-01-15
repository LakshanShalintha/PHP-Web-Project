<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Mail;


class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('dbkweerasekara@appsc.sab.ac.lk')->send(new ContactFormMail($details));

        return back()->with('success', 'Your message was sent successfully!');
    }
}

