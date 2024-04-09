<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialitieRequest;
use App\Http\Resources\SpecialitieResource;
use App\Models\Specialitie;
use Illuminate\Http\Request;

class SpecialitieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Specialitie::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $specialities = new Specialitie();
        $specialities->name = $request->input('name');

        $specialities->save();

        return response()->json([
            'specialities'=>$specialities
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $specialities= new SpecialitieResource(Specialitie::find($id));
        return response()->json([
            'specialities'=>$specialities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, SpecialitieRequest $request)
    {
        $specialities=Specialitie::find($id);
        $specialities->update($request->safe());
        $specialities->save();
        return response()->json([
            'specialities'=>$specialities
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specialities = Specialitie::find($id);
        $specialities->delete();

        return response()->json([
            'specialities'=>$this->index()
        ]);
    }
}
