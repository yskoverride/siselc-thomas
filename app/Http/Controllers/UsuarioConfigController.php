<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class UsuarioConfigController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function perfil()
    {
        return view('users.perfil');       
    }
    
    public function updatePerfil(Request $data)
    {
        $this->validate($data, [
            'name' => 'required',
            'lastName' => 'required',
            'DocIdentidad' => 'required',
            'email' => 'required|email',
        ]);
        $user = User::find(Auth::id());
        $user->update($data->all());        
        return back()->with('message', 'Datos Actualizados');    
    }  
    
    public function password()
    {
        return view('users.password');       
    }    
    
    public function updatePassword(Request $data)
    {
        $this->validate($data, [
            'password' => 'required',
            'newPassword' => 'required|string|min:8|confirmed',
        ]);
        $current_password = Auth::User()->password;
        
        if(Hash::check($data['password'], $current_password))
            {           
              $user_id = Auth::User()->id;                       
              $obj_user = User::find($user_id);
              $obj_user->password = bcrypt($data['newPassword']);
              $obj_user->save(); 
              return back()->with('message', 'Password Actualizado');
            }
            else
            {           
              $error = array('current-password' => 'Passwor actual incorrecto');
              return back()->withErrors($error);   
            }        
        }    
}
