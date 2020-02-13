<?php

namespace App\Http\Controllers;

use App\Contact;
use App\packageReq;
use App\customer;
use Illuminate\Http\Request;

class ConatctForms extends Controller
{
    public function store(){
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
    return back();
    }

    public function storePackage(){
        $data = request()->validate([
            'packs' => 'number',
            'passport' => 'min:10',
        ]);

        $package = new PackageReq;

        $package ->package = request('package');
        $package ->location = request('location');
        $package ->packs = request('packs');
        $package ->vehicle = request('vehicle');
        $package ->arrival = request('arrival');
        $package ->departure = request('departure');
        $package ->message = request('message');
        $package ->first_name = request('first_name');
        $package ->last_name = request('last_name');
        $package ->passport = request('passport');
        $package ->country = request('country');
        $package ->number = request('number');
        $package ->email = request('email');

        $package ->save();
    return back();
    }

        public function show(){
            $packages = packageReq::all();

            return view('internal.results', [
                'packages' => $packages
                ]);
        }
}
