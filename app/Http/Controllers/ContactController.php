<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }
 
    public function store(Request $request)
    {
        $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
        
        $check = Contact::create($data);
        return redirect()->back()->withSuccess('Great! Form successfully submit with validation.');
    }
}
