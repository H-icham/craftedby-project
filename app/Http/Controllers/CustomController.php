<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Http\Resources\CustomResource;
use App\Models\Custom;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Custom::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customs = new Custom;
        $customs->namecolor = $request->input('namecolor');
        $customs->namesize = $request->input('namesize');

        $customs->save();

        return response()->json([
            'customs'=>$customs
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customs= new CustomResource(Custom::find($id));
        return response()->json([
            'customs'=>$customs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, CustomRequest $request)
    {
        $customs=Custom::find($id);
        $customs->update($request->safe());
        $customs->save();
        return response()->json([
            'customs'=>$customs
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customs = Custom::find($id);
        $customs->delete();

        return response()->json([
            'customs'=>$this->index()
        ]);
    }
}
