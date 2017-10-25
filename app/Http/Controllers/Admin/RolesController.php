<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;


class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('role_access')) {
        //     return abort(401);
        // }

        $roles = Role::all();

        return view('admin.roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = \App\Permission::pluck('title', 'id');
        return view('admin.roles.create')->with('permissions', $permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->input('permission_list'), false);

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        if (Gate::forUser(\Auth::user())->allows('role_edit')) {

            $permissions = \App\Permission::pluck('title', 'id');
                
            $role = Role::findOrFail($id);

            return view('admin.roles.edit', compact('role'))->with('permissions', $permissions);
  //      }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request, $id)
    {
        // if (Gate::denies('role_update')) {
        
        //     return abort(401);
        // }

        $role = Role::findOrFail($id);
        $role->update($request->all());
        $role->permissions()->sync($request->input('permission_list'));

        return redirect()->route('roles.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index');
    }
}
