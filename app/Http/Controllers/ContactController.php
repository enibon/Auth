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

     dd($fields);
      $contact = Contact::create(([

        'name' => $fields['name'],
        'email' => $fields['email'],
        'phone' => $fields['phone'],
        'website' => $fields['website'],
        'message' => $fields['message']

      ]));

      dd($contact->save());

    
      if($contact){
        session()->flash('success', 'თქვენი მესიჯი წარმატებით გაიგზავნა!');
        return view('contact.index');
      }else {
      session()->flash('success', 'გთხოვთ თავიდან სცადოთ');
      return redirect()->back();
   } 
  }

}
