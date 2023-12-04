<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResources;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductResources::collection(Product::all());
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $created_product = new Product;
        $created_product -> name = $request -> name;
        $created_product -> type_products_id = $request -> type_products_id;
        $created_product -> price = $request -> price; 
        $created_product -> best_before_date = $request -> best_before_date;
        $created_product -> manufacturer_id = $request -> manufacturer_id;
        $created_product -> save();
        return $created_product;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::find($id);
        return $products;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::find($request->id);
        
        $product ->name = $request -> name;
        $product ->type_products_id = $request -> type_products_id;
        $product ->price = $request -> price;
        $product ->best_before_date = $request -> best_before_date;
        $product ->manufacturer_id = $request -> manufacturer_id;
        $product -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return true;
    }
}
