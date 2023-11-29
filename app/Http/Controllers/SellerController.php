<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Resources\SellerResources;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = SellerResources::collection(Seller::all());
        return $sellers;
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
        
        $created_seller = new Seller;
        $created_seller -> name = $request -> name; 
        $created_seller -> save();
        return $created_seller;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sellers = Seller::find($id);
        return $sellers;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller)
    {
        $seller = Seller::find($request->id);
        
        $seller ->name = $request -> name;
        
        $seller -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller)
    {
        
    }
}
