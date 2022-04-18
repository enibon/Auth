<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('contact.auth.login');
    }

    public function register(){
        return view('contact.auth.register');
    }

    public function registerUser(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric|max:9',
            'password' => 'required|confirmed',
      ]);

      $user = User::create([

        'email' => $request['email'],
        'phone' => $request['phone'],
        'password' => Hash::make($request['password']),

      ]);

      if(!$user){
          session()->flash('fail', 'გთხოვთ თავიდან სცადოთ');
      }else{
          session()->flash('success', 'თქვენ წარმატებით დარეგისტრირდით');
      }
        return redirect()->route('login.show');
    }

    public function loginUser(Request $request){
         
        $user = User::where('email', $request['email'])->first();

        if(!$user || !Hash::check($request['password'], $user->password)){
            return back()->with('fail', 'მომხმარებელი ვერ მოიძებნა');
        }
        
        auth()->login($user);

        return redirect()->route('dashboard');

    }

    public function logOut(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login.show');
    }
}
