<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;

class LoginController extends Controller
{
    //Where to redirect admin after login.
    protected $redirectTo = '/admin';      
    
    //Trait
    use AuthenticatesUsers;
    
    //Custom guard for admin
    protected function guard()
    {
      return Auth::guard('web_admin');
    } 
    
    //Shows Admin login form
    public function showLoginForm()
    {
       return view('authAdmin.login');
    }
    
    public function sendLoginResponse(Request $request)
    {
      $request->session()->regenerate();

      $this->clearLoginAttempts($request);

      return $this->authenticated($request, $this->guard()->user())
              ?: redirect($this->redirectTo);
    }
    
}
