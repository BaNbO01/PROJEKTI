<?php

namespace App\Http\Controllers;

use App\Http\Resources\SezonaResource;
use App\Models\Sezona;
use Illuminate\Http\Request;

class SezonaController extends Controller
{
    public function index()
    {
        $sezone = Sezona::with('dogadjaji.timovi')->get();
        return SezonaResource::collection($sezone);
    }

    public function show($id)
    {
        $sezona = Sezona::with('dogadjaji.timovi')->findOrFail($id);
        return new SezonaResource($sezona);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pocetak' => 'required|date',
            'kraj' => 'required|date|after:pocetak',
        ]);

        $sezona = Sezona::create($request->all());
        return new SezonaResource($sezona);
    }

    public function update(Request $request, $id)
    {
        $sezona = Sezona::findOrFail($id);
        $sezona->update($request->all());
        return new SezonaResource($sezona);
    }

    public function destroy($id)
    {
        $sezona = Sezona::findOrFail($id);
        $sezona->delete();
        return response()->json(['message' => 'Sezona obrisana'], 204);
    }
}
