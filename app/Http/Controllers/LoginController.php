<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\session;

class LoginController extends Controller
{   
    //signup function
    public function signup(Request $request)
    {
        $add = new Signup;
        if($request->isMethod('POST'))
        {
            $add->fullname = $request->get('fname');
            $add->email = $request->get('email');
            $add->password = hash::make($request->get('password'));
            $add->save();
        }
        return view('login');
    }

    //logni_data function
    public function login_data(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'password' => 'required',
        ]);

        $credentials=$request->only('fullname','password');

       if (Auth::guard('signup')->attempt($credentials)){
            // Authentication successful
          return redirect()->intended('home');
        }
        return redirect("/")->with('error', 'Oops! You have entered invalid credentials');
        
    }

    //logout function
    public function logout(){
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
    
}
