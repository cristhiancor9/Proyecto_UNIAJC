<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class UsuarioDao 
{
    //


functiom crear($datoUsuario){

	   $usuario = new Usuario;

        $usuario->name = $datoUsuario->name;

        $usuario->save();

}



}