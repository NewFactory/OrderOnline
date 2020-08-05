<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function submit (ContactRequest $req) {
        /*$validation = $req->validate([
        'name' => 'required|min:1|max:30',
        'email' => 'required|min:3|max:30',
        'message' => 'required|min:5|max:300'
      ]);*/
    }
}
