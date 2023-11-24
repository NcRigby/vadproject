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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdmissionTable $admissionTable)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdmissionTable $admissionTable)
    {
        //
    }
}
