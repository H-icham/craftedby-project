<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Artist::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artist=ArtistResource::make(Artist::find($id));
        return response()->json([
           'artist'=>$artist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
