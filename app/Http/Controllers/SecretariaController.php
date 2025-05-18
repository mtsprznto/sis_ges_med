<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::with('user')->get();
        return view("admin.secretarias.index", compact("secretarias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.secretarias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $datos = $request->all();
        return response()->json($datos);
        */
        $request->validate([
            "nombres" => "required",
            "apellidos" => "required",
            "ci" => 'required | unique:secretarias',
            "celular" => "required",
            "direccion" => "required",
            "fecha_nacimiento" => "required",
            "email" => "required | max:250 | unique:users",
            "password" => "required|max:250|confirmed"
        ]);
        $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $secretaria = new Secretaria();
        $secretaria->user_id=$usuario->id;
        $secretaria->nombres = $request->nombres;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->ci = $request->ci;
        $secretaria->celular = $request->celular;
        $secretaria->direccion = $request->direccion;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->save();



        return redirect()->route('admin.secretarias.index')->with("mensaje", "Se registro a secretario/a exitosamente!")->with("icono", "success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretaria $secretaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
