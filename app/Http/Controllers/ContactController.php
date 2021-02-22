<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contact.contact');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contactMessage' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contactMessage' => $request->get('contactMessage'),
        ), function($message) use ($request){
            $message->from($request->email);
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
