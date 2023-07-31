<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuariosData = Usuarios::all();

        return $usuariosData;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $usuario = $request->usuario;
        $contrasena = $request->contrasena;

        $usuarioData = Usuarios::create([
            'nombre' => $nombre,
            'usuario' => $usuario,
            'contrasena' => $contrasena
        ]);

        return $usuarioData;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarioData = Usuarios::findOrFail($id);

        return $usuarioData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarioData = Usuarios::findOrFail($id);

        $usuarioData->nombre = $request->nombre;
        $usuarioData->usuario = $request->usuario;
        $usuarioData->contrasena = $request->contrasena;

        $usuarioData->save();

        return $usuarioData;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarioData = Usuarios::findOrFail(1);

        $usuarioData->delete();

        return $usuarioData;
    }
}
