<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Tambahkan ini untuk handle Request

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Logika Login Kustom (Email atau Username)
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string', // Kolom input di form (bisa isi email/user)
            'password' => 'required|string|min:6',
        ]);

        // Cek apakah input adalah email atau username
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Susun data login secara dinamis
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        // Eksekusi login
        if (auth()->attempt($login)) {
            // Jika berhasil, redirect ke home
            return redirect()->route('home');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}