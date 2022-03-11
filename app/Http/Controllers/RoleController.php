<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::latest()->get();

        return view('master.role.role', compact('roles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $roles = Role::all();

        // return view('master.role.role', compact(
        //     'roles'
        // ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Role;
        return view('master.role.form', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest  $request)
    {
        // $request->validate([
        //     'role_nama' => 'required',
        //     'role_is_active' => 'required',
        // ]);

        // Role::create($request->all());

        // return redirect()->route('master.role.role')
        //     ->with('success', 'Role created successfully.');

        $model = new Role;
        $model->role_nama = $request->role_nama;
        // $model->role_is_active = $request->role_is_active;
        $model->save();

        return redirect('master.role.role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        // return view('role' , [

        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $model = Role::find($role);
        return view('master.role.edit', compact('model'));
        // return view('master.role.edit', compact(
        //     'model'
        // ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $model = Role::find($role);
        $model->role_nama = $request->role_nama;
        // $model->role_is_active = $request->role_is_active;
        $model->save();

        return redirect('master.role.role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')
            ->with('success', 'Role deleted successfully');

        // $model = Role::find($role);
        // $model->delete();
        // return redirect('master.role.role');
    }
}
