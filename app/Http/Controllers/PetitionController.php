<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionResource;
use App\Http\Resources\PetitionCollection;
use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return new PetitionCollection(Petition::all());
    }

    /**
     * Store a newly created resource in storage.
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([
            'title',
            'description',
            'category',
            'author',
            'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     */
    public function show(Petition $petition)
    {
        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        //
    }
}