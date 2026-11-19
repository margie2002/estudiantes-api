<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return response()->json(Estudiante::all());
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'   => 'required|string|max:255',
            'correo'   => 'required|email|max:255|unique:estudiantes,correo',
            'programa' => 'required|string|max:255',
        ]);

        $estudiante = Estudiante::create($datos);

        return response()->json($estudiante, 201);
    }

    public function show(string $id)
    {
        return response()->json(Estudiante::findOrFail($id));
    }
}
