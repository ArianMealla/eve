<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaL = Role::all();
        return view('roles.index', array('listaL' => $listaL));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listaP=Permission::get();
        return view('roles.create',compact('listaP')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:roles,name',
            'permission'=>'required'
        ]);

        $role=Role::create(['name'=>$request->name]);
        $role->syncPermissions($request->permission);
        return redirect()->route('roles.index');
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
    $listaP = Permission::get();
    $cu = Role::find($id);
    return view('roles.edit', ['cu' => $cu, 'listaP' => $listaP]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=>'required|unique:roles,name',
            'permission'=>'required'
        ]);

        $role = Role::find($id);
        
        $role->syncPermissions($request->permission);
        $role->update($request->all());
        return redirect()->route('roles.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $es = Role::findOrFail($id);
        $es->delete();
        return redirect()->route('roles.index');
    }
}

