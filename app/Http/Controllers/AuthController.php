<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    // --- REGISTRATION LOGIC ---
    public function register(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Create the user with HASHED password
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Securely hashes the password
        ]);

        // 3. Automatically log the user in after registration
       // Auth::login($user);

        // 4. Redirect to the protected dashboard
        return redirect()->route('dashboard');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    // --- LOGIN LOGIC ---
    public function login(Request $request)
    {
        // 1. Validate the login credentials input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to intended location or dashboard
            return redirect()->intended(route('dashboard'));
        }

        // 3. If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' || 'password' => 'email or password does not match our records',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}