<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Resources\ProductTypeResources;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productTypes = ProductTypeResources::collection(ProductType::all());
        return $productTypes;
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
        
        $created_product_type = new ProductType;
        $created_product_type -> name = $request -> name; 
        $created_product_type -> save();
        return $created_product_type;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productTypes = ProductType::find($id);
        return $productTypes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductType $productType)
    {
        $productType = ProductType::find($request->id);
        
        $productType ->name = $request -> name;
        
        $productType -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ProductType::destroy($id);
        return true;
    }
}
