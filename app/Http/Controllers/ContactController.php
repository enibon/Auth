<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
   public function contact(){
    return view('contact.index');
   }

   public function store(ContactRequest $request){
    
     $fields = $request->validated();

      $contact = Contact::create([

        'name' => $fields['name'],
        'email' => $fields['email'],
        'phone' => $fields['phone'],
        'website' => $fields['website'],
        'message' => $fields['message']

      ]);
    
      if(!$contact){
       return back()->with('fail', 'გთხოვთ თავიდან სცადოთ');
   } 
       return redirect()->route('contact.show');
  }

}
