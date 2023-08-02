<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use DB;

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
            'fecha_cita' => $fechaCita,
            'hora_cita' => $horaCita,
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
        $citaData = Citas::findOrFail($id);

        $citaData->delete();

        return $citaData;
    }

    public function searchByParams(Request $request)
    {

        $fechaCita = $request->fechaCita;
        $servicio = $request->servicio;
        $nombreCliente = $request->nombreCliente;

        $citasData = DB::table('citas');

        if ($fechaCita) {
            $citasData->where('fecha_cita', $fechaCita);
        }

        if ($servicio) {
            $citasData->where('servicio', $servicio);
        }

        if ($nombreCliente) {
            $citasData->where('nombre', $nombreCliente);
        }

        $citasData = $citasData->get();

        return $citasData;
    }
}
