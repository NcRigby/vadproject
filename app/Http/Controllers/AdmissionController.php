<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Http\Resources\AdmissionResources;
class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = AdmissionResources::collection(Admission::all());
        return $admissions;
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
        
        $created_admission = new Admission;
        $created_admission -> date = $request -> date;
        $created_admission -> provider_id = $request -> provider_id;
        $created_admission -> total_document_amount = $request -> total_document_amount; 
        $created_admission -> admission_table_id = $request -> admission_table_id;
        $created_admission -> save();
        return $created_admission;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admissions = Admission::find($id);
        return $admissions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission $admission)
    {
        $admission = Admission::find($request->id);
        
        $admission -> date = $request -> date;
        $admission -> provider_id = $request -> provider_id;
        $admission -> total_document_amount = $request -> total_document_amount; 
        $admission -> admission_table_id = $request -> admission_table_id;
        
        $admission -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Admission::destroy($id);
        return true;
    }
}
