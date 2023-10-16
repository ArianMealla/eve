<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Categoria;
use App\Models\Gestion;
use App\Models\Lugar;
use App\Models\TiposEvento;

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


    public function pdf()
    {
        return view('eventos.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       
        $gestions = Gestion::all();
        $tiposeventos = Tiposevento::all();
        $categorias = Categoria::all();
        $lugars = Lugar::all();
        

        
        return view('eventos.create', compact('gestions', 'categorias', 'tiposeventos', 'lugars'));

        
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
        /*return $request->all();*/
        $eventos->nombre = $request->get('nombre');
        $eventos->fechainicio = $request->get('fechainicio');
        $eventos->fechafinal = $request->get('fechafinal');
        $eventos->lugars_id = $request->get('lugars_id');
        $eventos->categorias_id = $request->get('categorias_id');
        $eventos->gestions_id = $request->get('gestions_id');
        $eventos->cupo = $request->get('cupo');
        $eventos->tiposeventos_id = $request->get('tiposeventos_id');
        $eventos->disponible = $request->get('disponible');           
        $eventos->descripcion = $request->get('descripcion');

        $eventos->save();

        return redirect('/eventos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eventos = Evento::find($id);
        return view('eventos.show', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gestions = Gestion::all();
        $tiposeventos = Tiposevento::all();
        $categorias = Categoria::all();
        $lugars = Lugar::all();
        
        $evento = Evento::find($id);
        return view('eventos.edit', compact('gestions', 'categorias', 'tiposeventos', 'lugars'))->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate(Evento::$rules);
        $evento = Evento::find($id);

        $evento->nombre = $request->get('nombre');
        $evento->fechainicio = $request->get('fechainicio');
        $evento->fechafinal = $request->get('fechafinal');
        $evento->lugars_id = $request->get('lugars_id');
        $evento->categorias_id = $request->get('categorias_id');
        $evento->gestions_id = $request->get('gestions_id');
        $evento->cupo = $request->get('cupo');
        $evento->tiposeventos_id = $request->get('tiposeventos_id');
        $evento->disponible = $request->get('disponible');           
        $evento->descripcion = $request->get('descripcion');

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
