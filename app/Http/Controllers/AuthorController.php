<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \App\Http\Resources\AuthorCollection
     */
    public function index()
    {
        return response()->json(new AuthorCollection(Author::all()), Response::HTTP_OK);
    }


    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }
}