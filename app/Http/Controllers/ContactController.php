<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
   public function contact(){
    return view('contact.index');
   }

   public function store(Request $request){

     $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email|',
      'phone' => 'required|numeric',
      'website' => 'required|url',
      'message' => 'required',
]);
      $contact = Contact::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'website' => $request['website'],
        'message' => $request['message']

      ]);
    
      if(!$contact){
       session()->flash('fail', 'გთხოვთ თავიდან სცადოთ');
      } 
       return back()->with('success', 'თქვენი მესიჯი წარმატებით გაიგზავნა');
  }

}
