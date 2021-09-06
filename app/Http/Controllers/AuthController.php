<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request) {
        // return $request->all();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // dd('Registrasi Berhasil!');
        User::create($validated);
        // $request->session()->flash('success', 'Registration success. Please login.');
        return redirect('/login')->with('success', 'Registration success. Please login.');
    }

    public function login() {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        // ['email' => $email, 'password' => $password])
        // dd('Registrasi Berhasil!');
        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'login failed! Try again!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
