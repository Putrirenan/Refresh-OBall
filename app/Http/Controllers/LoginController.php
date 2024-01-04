<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->Type == 'admin') {

                return redirect()->intended('/admin');
            } else if (Auth::user()->Type == 'user') {

                return redirect()->intended('/favorite');
            }
        }

        return back()->with('loginError', 'Login Failed');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function fbRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'username' => $googleUser->name,
            'email' => $googleUser->email,
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/favorite');
    }
    public function fbCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        $user = User::updateOrCreate([
            'facebook_id' => $facebookUser->id,
        ], [
            'name' => $facebookUser->name,
            'username' => $facebookUser->name,
            'email' => $facebookUser->email,
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'facebook_token' => $facebookUser->token,
            'facebook_refresh_token' => $facebookUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/favorite');
    }
}
