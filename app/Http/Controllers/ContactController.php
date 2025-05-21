<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store_contact(Request $request) {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);        
        // return $request;
        $user = Contact::create($request->all());
        // return $user;
        return back();
    }
}
