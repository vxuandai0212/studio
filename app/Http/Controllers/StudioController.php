<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;

class StudioController extends Controller
{
    public function index()
    {
        return Studio::all();
    }

    public function show(Studio $studio)
    {
        return $studio;
    }

    public function store(Request $request)
    {
        $studio = Studio::create($request->all());

        return response()->json($studio, 201);
    }

    public function update(Request $request, Studio $studio)
    {
        $studio->update($request->all());

        return response()->json($studio, 200);
    }

    public function delete(Studio $studio)
    {
        $studio->delete();

        return response()->json(null, 204);
    }
}
