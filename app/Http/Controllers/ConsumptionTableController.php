<?php

namespace App\Http\Controllers;

use App\Models\ConsumptionTable;
use Illuminate\Http\Request;
use App\Http\Resources\ConsumptionTableResources;

class ConsumptionTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumptionTables = ConsumptionTableResources::collection(ConsumptionTable::all());
        return $consumptionTables;
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
        
        $created_consumption_table = new ConsumptionTable;
        $created_consumption_table -> product_id = $request -> product_id;
        $created_consumption_table -> amount = $request -> amount;
        $created_consumption_table -> price = $request -> price; 
        $created_consumption_table -> sum = $request -> sum;
        $created_consumption_table -> warranty_cost = $request -> warranty_cost;
        $created_consumption_table -> save();
        return $created_consumption_table;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $consumptionTables = ConsumptionTable::find($id);
        return $consumptionTables;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsumptionTable $consumptionTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConsumptionTable $consumptionTable)
    {
        $consumptionTable = ConsumptionTable::find($request->id);
        
        $consumptionTable -> product_id = $request -> product_id;
        $consumptionTable -> amount = $request -> amount;
        $consumptionTable -> price = $request -> price; 
        $consumptionTable -> sum = $request -> sum;
        $consumptionTable -> warranty_cost = $request -> warranty_cost;
        
        $consumptionTable -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ConsumptionTable::destroy($id);
        return true;
    }
}
