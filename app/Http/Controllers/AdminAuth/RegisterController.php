<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users_admin;
use Illuminate\Support\Facades\Validator;
use Auth;


class RegisterController extends Controller
{
    protected $redirectPath = '/admin';
        
    public function showRegistrationForm()
    {
        return view('authAdmin.register');
    }
    
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create Admin
        $admin = $this->create($request->all());

        //Authenticates Admin
        $this->guard()->login($admin);

       //Redirects Admins
        return redirect($this->redirectPath);
    }    
    
    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'DocIdentidad' => 'required|max:255|unique:users_admins',
            'email' => 'required|email|max:255|unique:users_admins|confirmed',
            'password' => 'required|min:6|confirmed',
        ]);
    } 
    
    protected function create(array $data)
    {
        return Users_admin::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'DocIdentidad' => $data['DocIdentidad'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
    protected function guard()
    {
       return Auth::guard('web_admin');
    }
}
