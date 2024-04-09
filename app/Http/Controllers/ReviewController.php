<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reviews = new Review;
        $reviews->rating = $request->input('rating');
        $reviews->comment = $request->input('comment');

        $reviews->save();

        return response()->json([
            'reviews'=>$reviews
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reviews= new ReviewResource(Review::find($id));
        return response()->json([
            'reviews'=>$reviews
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, ReviewRequest $request)
    {
        $reviews=Review::find($id);
        $reviews->update($request->safe());
        $reviews->save();
        return response()->json([
            'reviews'=>$reviews
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reviews = Review::find($id);
        $reviews->delete();

        return response()->json([
            'reviews'=>$this->index()
        ]);
    }
}
