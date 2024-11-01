<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClanResource;
use App\Models\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    public function index()
    {
        $clanovi = Clan::with('tim')->get();
        return ClanResource::collection($clanovi);
    }

    public function show($id)
    {
        $clan = Clan::with('tim')->findOrFail($id);
        return new ClanResource($clan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|email|unique:clanovi,email',
            'tim_id' => 'required|exists:timovi,id',
        ]);

        $clan = Clan::create($request->all());
        return new ClanResource($clan);
    }

    public function update(Request $request, $id)
    {
        $clan = Clan::findOrFail($id);
        $clan->update($request->all());
        return new ClanResource($clan);
    }

    public function destroy($id)
    {
        $clan = Clan::findOrFail($id);
        $clan->delete();
        return response()->json(['message' => 'Clan obrisan'], 204);
    }
}
