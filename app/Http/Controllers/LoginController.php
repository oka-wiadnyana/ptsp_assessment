<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function attemptLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
       
      
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Selamat Datang',$request->username);
            return redirect()->intended('dashboard');
        }
 
        Alert::error('Gagal','Autentifikasi salah');
        return back()->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse
    {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/login');
    }


 }

