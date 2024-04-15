<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Desk\DeskCollection;
use App\Http\Resources\Desk\DeskResource;
use App\Models\Desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DeskCollection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $desk = Desk::create($request->all());

        return new DeskResource($desk);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DeskResource(Desk::with('lists')->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
