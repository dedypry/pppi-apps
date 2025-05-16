<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{

    public function login()
    {


        return view('pages.auth.login');
    }
    public function authenticate(request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userStatus = Auth::user()->status;

            if ($userStatus == 'submitted') {
                return back()->withErrors(['email' => 'Akun anda belum disetujui oleh admin.',]);
            } else if ($userStatus == 'rejected') {
                return back()->withErrors(['email' => 'Akun anda ditolak oleh admin.',]);
            }

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Terjadi kesalahan, periksa kembali email atau password anda.',
        ])->onlyInput('email');
    }

    public function registerView()
    {

        return view('pages.auth.register');
    }
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = bcrypt($request->input("password"));
        $user->role_id = 2; // 2 = user
        $user->saveOrFail();

        return redirect('/login')->with('success', 'Akun anda berhasil dibuat, silahkan tunggu konfirmasi dari admin.');
    }

    public function logout(Request $request): RedirectResponse
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
