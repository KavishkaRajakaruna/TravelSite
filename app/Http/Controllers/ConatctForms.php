<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConatctForms extends Controller
{
    public function storeQuestions(){
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email'=> 'required|email',
            'message' => 'required'
        ]);
    $contact = new Contact;
    $contact ->first_name = request('first_name');
    $contact -> last_name = request('last_name');
    $contact ->email = request('email');
    $contact->subject = request('subject');
    $contact->message = request('message');
    $contact -> save();
    }
}
