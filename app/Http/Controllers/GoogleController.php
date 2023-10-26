<?php

namespace App\Http\Controllers;

use App\Models\signup; // Import the Signup model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel()
    {
        $user = Socialite::driver('google')->user();
        // dd($user); // Uncomment this line to inspect user data

        // Search for the user in the 'signups' table by email
        $data = signup::where('email', $user->email)->first();

        // If the user doesn't exist, create a new entry
        if (is_null($data)) {
            $newUser['fullname'] = $user->name;
            $newUser['email'] = $user->email;

            // Create a new record in the 'signups' table
            $data = signup::create($newUser);
        }

        // Log in the user
        Auth::login($data);

        return redirect('home');
    }
}
