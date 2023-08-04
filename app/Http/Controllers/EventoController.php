<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * -----------------------------------
     * Display a listing of the resource.|
     * -----------------------------------
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index')->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * -------------------------------------------
     * Store a newly created resource in storage.|
     * -------------------------------------------
     */
    public function store(Request $request)
    {
        request()->validate(Evento::$rules);
        $eventos = new Evento();

        $eventos->nombre = $request->get('nombre');
        $eventos->gestion = $request->get('gestion');
        $eventos->descripcion = $request->get('descripcion');
        $eventos->cupo = $request->get('cupo');
        $eventos->categoria = $request->get('categoria');
        $eventos->disponible = $request->get('disponible');

        $eventos->save();

        return redirect('/eventos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evento = Evento::find($id);
        return view('eventos.edit')->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evento = Evento::find($id);

        $evento->nombre = $request->get ('nombre');
        $evento->gestion = $request->get ('gestion');
        $evento->descripcion = $request->get ('descripcion');
        $evento->cupo = $request->get ('cupo');
        $evento->categoria = $request->get ('categoria');
        $evento->disponible = $request->get ('disponible');

        $evento->save();

        return redirect('/eventos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/eventos');
    }
}
