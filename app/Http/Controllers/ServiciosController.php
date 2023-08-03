<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $serviciosData = Servicios::all();

        return $serviciosData;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = $request->nombre;

        $servicioData = Servicios::create([
            'nombre' => $nombre
        ]);

        return $servicioData;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicioData = Servicios::findOrFail($id);

        return $servicioData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicioData = Servicios::findOrFail($id);

        $servicioData->nombre = $request->nombre;

        $servicioData->save();

        return $servicioData;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicioData = Servicios::findOrFail($id);

        $servicioData->delete();

        return $servicioData;
    }
}
