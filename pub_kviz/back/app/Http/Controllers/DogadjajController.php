<?php

namespace App\Http\Controllers;

use App\Http\Resources\DogadjajResource;
use App\Models\Dogadjaj;
use Illuminate\Http\Request;

class DogadjajController extends Controller
{
    public function index()
    {
        $dogadjaji = Dogadjaj::with('timovi')->get();
        return DogadjajResource::collection($dogadjaji);
    }

    public function show($id)
    {
        $dogadjaj = Dogadjaj::with('timovi')->findOrFail($id);
        return new DogadjajResource($dogadjaj);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sezona_id' => 'required|exists:sezone,id',
            'datum_odrzavanja' => 'required|date',
        ]);

        $dogadjaj = Dogadjaj::create($request->all());
        return new DogadjajResource($dogadjaj);
    }

    public function update(Request $request, $id)
    {
        $dogadjaj = Dogadjaj::findOrFail($id);
        $dogadjaj->update($request->all());
        return new DogadjajResource($dogadjaj);
    }

    public function destroy($id)
    {
        $dogadjaj = Dogadjaj::findOrFail($id);
        $dogadjaj->delete();
        return response()->json(['message' => 'Dogadjaj obrisan'], 204);
    }
}
