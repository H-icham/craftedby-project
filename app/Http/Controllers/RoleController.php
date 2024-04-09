<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = new Role();
        $roles->type = $request->input('type');
        $roles->enum = $request->input('enum');

        $roles->save();

        return response()->json([
            'roles'=>$roles
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $roles= new RoleResource(Role::find($id));
        return response()->json([
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, RoleRequest $request)
    {
        $roles=Role::find($id);
        $roles->update($request->safe());
        $roles->save();
        return response()->json([
            'roles'=>$roles
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();

        return response()->json([
            'roles'=>$this->index()
        ]);
    }
}
