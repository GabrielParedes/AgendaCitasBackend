<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $sesion = false;

        $usuario = $request->usuario;
        $contrasena = $request->contrasena;

        $usuarioData = Usuarios::where('usuario', $usuario)
        ->where('contrasena', $request->contrasena)
        ->first();

        // dd($usuarioData);

        if($usuarioData) {
            $sesion = true;
        } else {
            $sesion = false;
        }

        return response()->json(['sesion' => $sesion], 200);
    }
}
