<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consultorios = Consultorio::all();
        return view('admin.consultorios.index', compact('consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.consultorios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $datos = request()->all();
        return response()->json($datos);
        */
        $request->validate([
            "nombre" => "required",
            "ubicacion" => "required",
            "capacidad" => 'required',
            "especialidad" => 'required',
            "estado" => "required"
        ]);

        Consultorio::create($request->all());


        return redirect()->route('admin.consultorios.index')
            ->with('mensaje', 'Se registro al consultorio exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $consultorio = Consultorio::findOrFail($id);

        return view('admin.consultorios.show', compact('consultorio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultorio $consultorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultorio $consultorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultorio $consultorio)
    {
        //
    }
}
