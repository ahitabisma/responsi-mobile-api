<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Mata_uang;
use Illuminate\Http\Request;

class Mata_uangController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mata_uang = Mata_uang::all();
        // return view("mata_uang.index", compact("mata_uang"));
        return response()->json($mata_uang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("mata_uang.create");
        return response()->json(Mata_uang::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mata_uang = Mata_uang::create($request->all());
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json($mata_uang)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        if (!$mata_uang) return response()->json(null,404);
        // return view("mata_uang.show", compact("mata_uang"));
        return response()->json($mata_uang);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        if (!$mata_uang) return response()->json(null,404);
        // return view("mata_uang.edit", compact("mata_uang"));
        return response()->json($mata_uang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mata_uang = Mata_uang::find($id);
        if (!$mata_uang) return response()->json(null,404);
        $mata_uang->update($request->all());
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json($mata_uang)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        if (!$mata_uang) return response()->json(null,404);
        $mata_uang->delete();
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
