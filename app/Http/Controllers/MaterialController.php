<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Http\Resources\MaterialResource;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Material::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materials = new Material;
        $materials->name = $request->input('name');

        $materials->save();

        return response()->json([
            'materials'=>$materials
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $materials= new MaterialResource(Material::find($id));
        return response()->json([
            'materials'=>$materials
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, MaterialRequest $request)
    {
        $materials=Material::find($id);
        $materials->update($request->safe());
        $materials->save();
        return response()->json([
            'materials'=>$materials
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materials = Material::find($id);
        $materials->delete();

        return response()->json([
            'materials'=>$this->index()
        ]);
    }
}
