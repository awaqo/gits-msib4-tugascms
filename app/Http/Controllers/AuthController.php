<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function register() {
        return view('layouts.register');
    }
    public function login() {
        return view('layouts.login');
    }

    public function doRegister(Request $request) {
        $request->validate([
            'name' => ['required','string', 'max:100'],
            'email' => ['required','string', 'max:100', 'email', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required','string', 'max:100', 'email'],
            'password' => ['required', Rules\Password::defaults()]
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email and password invalid.'
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function index()
    {
        $data['category'] = Category::count();
        $data['product'] = Product::count();
        return view('layouts.dashboard.index', $data);
    }

}
