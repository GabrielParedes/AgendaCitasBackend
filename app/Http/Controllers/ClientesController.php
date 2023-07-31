<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientesData = Clientes::all();

        return $clientesData;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $telefono = $request->telefono;

        $clienteData = Clientes::create([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'telefono' => $telefono
        ]);

        return $clienteData;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clienteData = Clientes::findOrFail($id);

        return $clienteData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clienteData = Clientes::findOrFail($id);

        $clienteData->nombre = $request->nombre;
        $clienteData->apellido = $request->apellido;
        $clienteData->telefono = $request->telefono;

        $clienteData->save();

        return $clienteData;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clienteData = Clientes::findOrFail(1);

        $clienteData->delete();

        return $clienteData;
    }
}
