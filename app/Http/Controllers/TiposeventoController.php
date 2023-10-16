<?php

namespace App\Http\Controllers;

use App\Models\Tiposevento;
use Illuminate\Http\Request;

/**
 * Class TiposeventoController
 * @package App\Http\Controllers
 */
class TiposeventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposeventos = Tiposevento::paginate();

        return view('tiposevento.index', compact('tiposeventos'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposeventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposevento = new Tiposevento();
        return view('tiposevento.create', compact('tiposevento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiposevento::$rules);

        $tiposevento = Tiposevento::create($request->all());

        return redirect()->route('tiposevento.index')
            ->with('success', 'Tipo Evento Añadido.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposevento = Tiposevento::find($id);

        return view('tiposevento.show', compact('tiposevento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposevento = Tiposevento::find($id);

        return view('tiposevento.edit', compact('tiposevento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiposevento $tiposevento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposevento $tiposevento)
    {
        request()->validate(Tiposevento::$rules);

        $tiposevento->update($request->all());

        return redirect()->route('tiposevento.index')
            ->with('success', 'Tipo Evento Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposevento = Tiposevento::find($id)->delete();

        return redirect()->route('tiposevento.index')
            ->with('success', 'Tipo Evento Borrado');
    }
}
