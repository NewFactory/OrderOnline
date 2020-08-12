<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {

    public function submit (ContactRequest $req) {
        /*$validation = $req->validate([
        'name' => 'required|min:1|max:30',
        'email' => 'required|min:3|max:30',
        'message' => 'required|min:5|max:300'
      ]);*/

      $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('home')->with('success','Sent');

    }
}
