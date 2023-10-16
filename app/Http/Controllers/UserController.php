<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaL = User::all();
        return view('user.index', array('listaL' => $listaL));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('user.create',['listaR'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|same:conf-password',
            'roles'=>'required'
        ]);
        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $user->assignRole($request->roles);
        return redirect()->route('users.index');
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'name')->all();
        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id, // Ignore the current user's email during validation
            'password' => 'nullable|same:conf-password',
            'roles' => 'required'
        ]);

        $input = $request->all();

        // Check if a new password is provided and hash it
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            // If no new password is provided, remove it from the input array to avoid updating with an empty password
            unset($input['password']);
        }

        $user = User::findOrFail($id);
        $user->update($input);

        // Sync the user's roles
        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
