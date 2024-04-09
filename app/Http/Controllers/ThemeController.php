<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeRequest;
use App\Http\Resources\ThemeResource;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Theme::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $themes = new Theme();
        $themes->enum = $request->input('enum');

        $themes->save();

        return response()->json([
            'themes'=>$themes
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $themes= new ThemeResource(Theme::find($id));
        return response()->json([
            'themes'=>$themes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, ThemeRequest $request)
    {
        $themes=Theme::find($id);
        $themes->update($request->safe());
        $themes->save();
        return response()->json([
            'themes'=>$themes
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $themes = Theme::find($id);
        $themes->delete();

        return response()->json([
            'themes'=>$this->index()
        ]);
    }
}
