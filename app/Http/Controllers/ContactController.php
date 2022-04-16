<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
   public function contact(){
    return view('contact.show');
   }

   public function store(ContactRequest $request){
    
     $fields = $request->validated();

      $contact = Contact::create($request->all([

        'name' => $fields['name'],
        'email' => $fields['email'],
        'phone' => $fields['phone'],
        'website' => $fields['website'],
        'message' => $fields['message']

      ]));

      if(!$contact){
        return redirect()->back()->with(['fail' => 'გთხოვთ თავიდან სცადოთ']);
      }
      return redirect()->back()->with(['success' => 'თქვენი მესიჯი წარმატებით გაიგზავნა!']);
   }

}
