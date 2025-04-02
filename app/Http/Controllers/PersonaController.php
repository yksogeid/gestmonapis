<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function store(Request $request)
    {
        try {
            // Check if persona already exists with the same numeroDocumento
            $existingPersona = Persona::where('numeroDocumento', $request->numeroDocumento)->first();
            
            if ($existingPersona) {
                return response()->json([
                    'error' => 'Ya existe una persona registrada con este número de documento'
                ], 409);
            }

            $persona = Persona::create($request->all());
            return response()->json($persona, 201);
            
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al crear la persona',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        return Persona::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());
        return response()->json($persona, 200);
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return response()->json(null, 204);
    }
}