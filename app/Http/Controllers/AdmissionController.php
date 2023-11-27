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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
