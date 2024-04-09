<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orders = new Order();
        $orders->name = $request->input('name');
        $orders->totalPrice = $request->input('totalPrice');
        $orders->cartStatus = $request->input('cartStatus');
        $orders->date = $request->input('date');

        $orders->save();

        return response()->json([
            'orders'=>$orders
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orders= new OrderResource(Order::find($id));
        return response()->json([
            'orders'=>$orders
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, OrderRequest $request)
    {
        $orders=Order::find($id);
        $orders->update($request->safe());
        $orders->save();
        return response()->json([
            'orders'=>$orders
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();

        return response()->json([
            'orders'=>$this->index()
        ]);
    }
}
