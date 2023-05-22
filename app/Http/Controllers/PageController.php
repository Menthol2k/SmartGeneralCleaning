<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
    
        $validator->messages()->add('name.required', 'Nu ai introdus Numele.');
        $validator->messages()->add('email.required', 'Nu ai introdus Adresa de email.');
        $validator->messages()->add('phone.required', 'Nu ai introdus Numărul de telefon.');
        $validator->messages()->add('message.required', 'Nu ai introdus Mesajul.');
        
        
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $post = new Contact;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->message = $request->message;
        $post->save();
    
        return redirect('/')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    
    

}
