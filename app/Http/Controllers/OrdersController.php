<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = auth()->user()->orders()->with('user')->paginate(3);
        $carts = $orders->transform(function($cart, $key) {
            return unserialize($cart->cart);
        });
    //  dd($orders);
    $cate=Category::get();
        return view('orders.index', compact('orders','carts','cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
