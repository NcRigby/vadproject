<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use Illuminate\Http\Request;
use App\Http\Resources\ConsumptionResources;

class ConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumptions = ConsumptionResources::collection(Consumption::all());
        return $consumptions;
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
        
        $created_consumption = new Consumption;
        $created_consumption -> date = $request -> date;
        $created_consumption -> seller_id = $request -> seller_id;
        $created_consumption -> total_document_amount = $request -> total_document_amount; 
        $created_consumption -> consumption_table_id = $request -> consumption_table_id;
        $created_consumption -> save();
        return $created_consumption;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $consumptions = Consumption::find($id);
        return $consumptions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consumption $consumption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consumption $consumption)
    {
        $consumption = Consumption::find($request->id);
        
        $consumption -> date = $request -> date;
        $consumption -> seller_id = $request -> seller_id;
        $consumption -> total_document_amount = $request -> total_document_amount; 
        $consumption -> consumption_table_id = $request -> consumption_table_id;
        
        $consumption -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Consumption::destroy($id);
        return true;
    }
}
