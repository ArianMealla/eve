<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

/**
 * Class LugarController
 * @package App\Http\Controllers
 */
class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugars = Lugar::paginate();

        return view('lugar.index', compact('lugars'))
            ->with('i', (request()->input('page', 1) - 1) * $lugars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $lugar = new Lugar();
        return view('lugar.create', compact('lugar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Lugar::$rules);

        $lugar = Lugar::create($request->all());

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar Añadido.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugar = Lugar::find($id);

        return view('lugar.show', compact('lugar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugar = Lugar::find($id);

        return view('lugar.edit', compact('lugar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugar $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        request()->validate(Lugar::$rules);

        $lugar->update($request->all());

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id)->delete();

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar Borrado');
    }
}
