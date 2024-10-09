<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ContactController extends Controller
{
    public function store(Request $request){
       $request->validate([
           'name' => 'required',
           'email' => 'required',
       ]);
         $data = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
         ]);
         return response()->json(['message' => 'Message Successfully Send']);

   }
}
