<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = new User;
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->imageUrl = $request->input('imageUrl');
        $products->type = $request->input('type');


        $products->save();

        return response()->json([
            'products'=>$products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products= new ProductResource(Product::find($id));
        return response()->json([
            'products'=>$products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, ProductRequest $request)
    {
        $products=Product::find($id);
        $products->update($request->safe());
        $products->save();
        return response()->json([
            'products'=>$products
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return response()->json([
            'products'=>$this->index()
        ]);
    }
}
