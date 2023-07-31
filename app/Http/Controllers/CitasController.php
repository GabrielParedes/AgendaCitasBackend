<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citasData = Citas::all();

        return $citasData;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $telefono = $request->telefono;
        $fechaCita = $request->fechaCita;
        $horaCita = $request->horaCita;
        $servicio = $request->servicio;

        $citaData = Citas::create([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'telefono' => $telefono,
            'fechaCita' => $fechaCita,
            'horaCita' => $horaCita,
            'servicio' => $servicio
        ]);

        return $citaData;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $citaData = Citas::findOrFail($id);

        return $citaData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $citaData = Citas::findOrFail($id);

        $citaData->nombre = $request->nombre;
        $citaData->apellido = $request->apellido;
        $citaData->telefono = $request->telefono;
        $citaData->fechaCita = $request->fechaCita;
        $citaData->horaCita = $request->horaCita;
        $citaData->servicio = $request->servicio;

        $citaData->save();

        return $citaData;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $citaData = Citas::findOrFail(1);

        $citaData->delete();

        return $citaData;
    }
}
