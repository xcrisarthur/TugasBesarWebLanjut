<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('admin.login.index');
    }

    public function login(Request $request) {
        $this->validator($request);

        if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))) {
            return redirect()
                ->intended(route('admin.home'))
                ->with('status', 'You are logged in as Admin');
        }

        return $this->loginFailed();
    }

    private function validator(Request $request) {
        $rules = [
            'email'     => 'required|email|exists:admin|min:5|max:191',
            'password'  => 'required|string|min:4|max:255',
        ];

        $message = [
            'email.exists' => 'These credentials do not match to our records.',
        ];

        $request->validate($rules, $message);
    }

    private function loginFailed() {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Login failed, please try again');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status', 'Admin has been logged out');
    }
}
