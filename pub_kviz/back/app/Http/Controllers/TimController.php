<?php

namespace App\Http\Controllers;

use App\Http\Resources\TimResource;
use App\Models\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    public function index()
    {
        $timovi = Tim::with('clanovi')->get();
        return TimResource::collection($timovi);
    }

    public function show($id)
    {
        $tim = Tim::with('clanovi')->findOrFail($id);
        return new TimResource($tim);
    }

    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
        ]);

        $tim = Tim::create($request->all());
        return new TimResource($tim);
    }

    public function update(Request $request, $id)
    {
        $tim = Tim::findOrFail($id);
        $tim->update($request->all());
        return new TimResource($tim);
    }

    public function destroy($id)
    {
        $tim = Tim::findOrFail($id);
        $tim->delete();
        return response()->json(['message' => 'Tim obrisan'], 204);
    }
}
