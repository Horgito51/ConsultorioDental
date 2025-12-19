<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index()
    {

        $consultas = Consulta::where('is_active', true)->get();
         return view('consultas.index', compact('consultas'));
    }


    public function create()
    {
        return view('consultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['paciente' => 'required|string|max:50',
        'telefono' => 'required|string|max:10',
        'fecha'    => 'required|date',
        ]);
        Consulta::create($request->all());
        return redirect()->route('consultas.index')->with('success','consulta creada exitosamente');
    }
    public function show(Consulta $consulta)
    {
        //
    }

    public function edit(Consulta $consulta)
    {
        return view('consultas.edit',compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consulta $consulta)
    {
         $request->validate(
            ['paciente' => 'required|string|max:50',
        'telefono' => 'required|string|max:10',
        'fecha'    => 'required|date',
        'estado'=>'required'
        ]);

        $consulta->update($request->all());
        return redirect()->route('consultas.index')->with('success','consulta actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route('consultas.index')->with('success','consulta eliminada');
    }
}
