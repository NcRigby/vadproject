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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsumptionTable $consumptionTable)
    {
        //
    }
}
