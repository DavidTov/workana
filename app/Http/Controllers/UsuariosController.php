<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
  
class UsuariosController extends Controller
{
    public function registrarUsuario(){
      $usuario = new User();
      $usuario->name = request('nombre');
      $usuario->email  = request('correo');
      $usuario->password  = Hash::make(request('password'));
      $usuario->save();
      return redirect('/');
    }
}
