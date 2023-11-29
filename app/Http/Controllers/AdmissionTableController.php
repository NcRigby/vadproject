<?php

namespace App\Http\Controllers;

use App\Models\AdmissionTable;
use Illuminate\Http\Request;
use App\Http\Resources\AdmissionTableResources;

class AdmissionTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissionTables = AdmissionTableResources::collection(AdmissionTable::all());
        return $admissionTables;
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
        
        $created_admission_table = new AdmissionTable;
        $created_admission_table -> product_id = $request -> product_id;
        $created_admission_table -> amount = $request -> amount;
        $created_admission_table -> price = $request -> price; 
        $created_admission_table -> sum = $request -> sum;
        $created_admission_table -> save();
        return $created_admission_table;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admissionTables = AdmissionTable::find($id);
        return $admissionTables;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdmissionTable $admissionTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdmissionTable $admissionTable)
    {
        $admissionTable = AdmissionTable::find($request->id);
        
        $admissionTable -> product_id = $request -> product_id;
        $admissionTable -> amount = $request -> amount;
        $admissionTable -> price = $request -> price; 
        $admissionTable -> sum = $request -> sum;
        
        $admissionTable -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdmissionTable $admissionTable)
    {
        //
    }
}
