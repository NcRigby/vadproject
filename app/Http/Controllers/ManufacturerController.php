<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Resources\ManufacturerResources;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturers = ManufacturerResources::collection(Manufacturer::all());
        return $manufacturers;
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
        
        $created_manufacturer = new Manufacturer;
        $created_manufacturer -> name = $request -> name;
        $created_manufacturer -> save();
        return $created_manufacturer;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $manufacturers = Manufacturer::find($id);
        return $manufacturers;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer = Manufacturer::find($request->id);
        
        $manufacturer ->name = $request -> name;
        
        $manufacturer -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacturer $manufacturer)
    {
        //
    }
}
