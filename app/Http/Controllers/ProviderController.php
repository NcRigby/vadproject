<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Resources\ProviderResources;
class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = ProviderResources::collection(Provider::all());
        return $providers;
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
        $created_provider = new Provider;
        $created_provider -> name = $request -> name; 
        $created_provider -> save();
        return $created_provider;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $providers = Provider::find($id);
        return $providers;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        $provider = Provider::find($request->id);
        
        $provider ->name = $request -> name;
        
        $provider -> save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Provider::destroy($id);
        return true;
    }
}
