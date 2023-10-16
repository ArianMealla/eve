<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use Illuminate\Http\Request;

/**
 * Class GestionController
 * @package App\Http\Controllers
 */
class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestions = Gestion::paginate();

        return view('gestions.index', compact('gestions'))
            ->with('i', (request()->input('page', 1) - 1) * $gestions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gestions = new Gestion();
        return view('gestions.create', compact('gestions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gestion::$rules);

        $gestions = Gestion::create($request->all());

        return redirect()->route('gestions.index')
            ->with('success', 'Gestion Añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gestions = Gestion::find($id);

        return view('gestions.show', compact('gestions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestions = Gestion::find($id);

        return view('gestions.edit', compact('gestions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gestion $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestions)
    {
        request()->validate(Gestion::$rules);

        $gestions->update($request->all());

        return redirect()->route('gestions.index')
            ->with('success', 'Gestion Actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gestions = Gestion::find($id)->delete();

        return redirect()->route('gestions.index')
            ->with('success', 'Gestion Borrada');
    }
}
