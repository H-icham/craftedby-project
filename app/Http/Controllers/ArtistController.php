<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistRequest;
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
    public function store(ArtistRequest $request)
    {
        $artist = new Artist;
        $artist->siret = $request->input('siret');
        $artist->history = $request->input('history');
        $artist->craftingDescription = $request->input('craftingDescription');
        //$artist->user()->associate($user);
        $artist->save();

//        $artist = Artist::create($request->all());
//        $artist = ArtistResource::make($artist);


        return response()->json(
            $artist
        );
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
    public function update($id, ArtistRequest $request)
    {
        $artists=Artist::find($id);
        $artists->update($request->safe());
        $artists->save();
        return response()->json([
            'artists'=>$artists
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();

        return response()->json([
            'artists'=>$this->index()
        ]);
    }
}
