<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct() {
        app()->setLocale('id');
    }
    
    public function index(){
        return view('components.pages.dashboard',[
            'title' => 'Dashboard',
        ]);
            
    }

    public function login(){
        return view('components.pages.login',[
            'title' => 'Login Please',
        ]);
    }
    
    public function log_session(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            // $userId = Auth::id();
            // $user = User::find($userId);

            // if ($user) {
            //     $user->is_online = true;
            //     $user->update();
            // }

            $request->session()->regenerate();
            return redirect()->intended('/dashboard/home');
        }
        return redirect()->back()->with('failed', 'Password / Username Tidak Terdaftar');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
