<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Departamento;
use App\Models\Genero;
use App\Models\Horario;
use App\Models\Place;

use Illuminate\Http\Request;

/**
 * Class InscripcionController
 * @package App\Http\Controllers
 */
class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcions = Inscripcion::paginate();

        return view('inscripcion.index', compact('inscripcions'))
            ->with('i', (request()->input('page', 1) - 1) * $inscripcions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        $horarios = Horario::all();
        $generos = Genero::all();
        $departamentos = Departamento::all();
        $inscripcion = new Inscripcion();
        return view('inscripcion.create', compact('inscripcion','departamentos','generos','horarios','places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request->all();*/
        request()->validate(Inscripcion::$rules);

        $inscripcion = Inscripcion::create($request->all());

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion Satisfactoria.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscripcion = Inscripcion::find($id);

        return view('inscripcion.show', compact('inscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $places = Place::all();
        $horarios = Horario::all();
        $generos = Genero::all();
        $departamentos = Departamento::all();
        $inscripcion = Inscripcion::find($id);

        return view('inscripcion.edit', compact('inscripcion','departamentos','generos','horarios','places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscripcion $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        request()->validate(Inscripcion::$rules);

        $inscripcion->update($request->all());

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion Actlualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id)->delete();

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion Eliminada');
    }
}
