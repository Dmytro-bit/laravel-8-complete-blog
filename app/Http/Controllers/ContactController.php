<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($request) {
            $message->to('contact@pyhub.com')
                ->subject($request->input('subject'))
                ->setBody('Name: ' . $request->input('name') . "\n\n" . 'Message: ' . $request->input('message'), 'text/plain');
        });

        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}
