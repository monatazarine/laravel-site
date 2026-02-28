<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**public function index(?Product $product): View     {
         // param is present → show orders of that product
         if ($product->exists) {
        // get orders
         $orders = $product->orders()->get();
        return view('product_orders', compact('product', 'orders'));
         }
         // param is not present → show all products
            $products = Product::paginate(10, );
            return view('index', compact('products')); 
    }   */
      
    public function index()
    {
        //
       $products = Product::paginate(10, );
        return view('index', compact('products'));

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showOrders($id)
    {
        $product = Product::findOrFail($id);
        $orders = $product->orders()->paginate(10);
        return view('product_orders', compact('product', 'orders'));
    }
}
