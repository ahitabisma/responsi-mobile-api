<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasukan = Pemasukan::all();
        // return view("pemasukan.index", compact("pemasukan"));
        return response()->json($pemasukan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("pemasukan.create");
        return response()->json(Pemasukan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemasukan = Pemasukan::create($request->all());
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json($pemasukan)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        if (!$pemasukan) return response()->json(null,404);
        // return view("pemasukan.show", compact("pemasukan"));
        return response()->json($pemasukan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        if (!$pemasukan) return response()->json(null,404);
        // return view("pemasukan.edit", compact("pemasukan"));
        return response()->json($pemasukan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemasukan = Pemasukan::find($id);
        if (!$pemasukan) return response()->json(null,404);
        $pemasukan->update($request->all());
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json($pemasukan)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        if (!$pemasukan) return response()->json(null,404);
        $pemasukan->delete();
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
