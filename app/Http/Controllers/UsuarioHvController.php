<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Municipio;
use App\Cargo;
use App\Tgs_empresa;
Use DB;
use File;

class UsuarioHvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function datosPersonales()
    {
        $departamentos= DB::table('municipios')
            ->select('departamento')
            ->groupBy('departamento')
            ->pluck('departamento','departamento');
        $municipios= Municipio::orderBy('departamento')->orderBy('municipio')->get();
        return view('users.datosPersonales', compact('departamentos'), compact('municipios'));
    }
    
    public function updateDatosPersonales(Request $data)
    {
        $this->validate($data, [
            'FechaNacimiento' => 'required|date|before:18 years ago',   
            'foto' => 'image|max:1000',
            'ImagenDoc' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:1000',
            'certificadoEps' => 'mimes:pdf|max:1000',
            'SoporteEducacion' => 'mimes:pdf|max:1000',
            
        ]);
        $user = User::find(Auth::id());
        $user->update($data->all()); 
        $user->save();
        
        $file = $data->file('foto');
        if (!empty($file)){
            File::delete("img/$user->foto");
            $fileName = md5(Auth::user()->email) . '(foto).' . 'jpg'; // renameing image
            $destinationPath = 'img';
            $file->move($destinationPath,$fileName); 
            $user->foto=$fileName;
            $user->save();            
        }      
        $file = $data->file('ImagenDoc');
        if (!empty($file)){
            File::delete("img/$user->ImagenDoc");
            $fileName = md5(Auth::user()->email) . '(ImagenDoc).' . 'jpg'; // renameing image
            $destinationPath = 'img';
            $file->move($destinationPath,$fileName); 
            $user->ImagenDoc=$fileName;
            $user->save();            
        }      
        $file = $data->file('certificadoEps');
        if (!empty($file)){
            File::delete("img/$user->certificadoEps");
            $fileName = md5(Auth::user()->email) . '(certificadoEps).' . 'pdf'; // renameing image
            $destinationPath = 'img';
            $file->move($destinationPath,$fileName); 
            $user->certificadoEps=$fileName;
            $user->save();            
        }       
        $file = $data->file('SoporteEducacion');
        if (!empty($file)){
            File::delete("img/$user->SoporteEducacion");
            $fileName = md5(Auth::user()->email) . '(SoporteEducacion).' . 'pdf'; // renameing image
            $destinationPath = 'img';
            $file->move($destinationPath,$fileName); 
            $user->SoporteEducacion=$fileName;
            $user->save();            
        }   
        return back()->with('message', 'Datos Actualizados');         
    } 
    
    public function experiencia()
    {
        $empresas=Tgs_empresa::orderBy('id')->pluck('empresa','empresa');
        return view('users.experiencia', compact('empresas'));
    } 
    
    public function updateExperiencia(Request $data)
    {
        $this->validate($data, [
            'experienciaFormal' => 'required',   
        ]);
        $user = User::find(Auth::id());
        $user->update($data->all()); 
        $user->save();         
        return back()->with('message', 'Datos Actualizados');         
    }  
    public function experienciaSIS()
    {
        $cargos=Cargo::orderBy('nombreCargo')->pluck('nombreCargo', 'nombreCargo')->prepend('','');
        $pruebas = DB::table('pruebas')
                    ->select('pruebas.id', 'cargos.nombreCargo', 'pruebas.fecha_inicio', 'clientes.nombreCliente' )
                    ->join('clientes', 'pruebas.id_cliente', '=', 'clientes.id')
                    ->get();        
        return view('users.experienciaSIS', compact('cargos'), compact('pruebas'));
    } 
    
    public function updateExperienciaSIS(Request $data)
    {
        $this->validate($data, [
            'experienciaSIS' => 'required',
            'PruebasEntreSemana' => 'required', 
            'PruebasFueraBogota' => 'required', 
        ]);
        $user = User::find(Auth::id());
        $user->update($data->all()); 
        $user->save();         
        return back()->with('message', 'Datos Actualizados');         
    }    

    public function referencias()
    {
        return view('users.referencias');
    } 
    
    public function updateReferencias(Request $data)
    {
        $user = User::find(Auth::id());
        $user->update($data->all()); 
        $user->save();              
        return back()->with('message', 'Datos Actualizados');         
    }     
    
}
