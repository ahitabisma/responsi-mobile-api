<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Catatan_transaksi;
use Illuminate\Http\Request;
use Response;

class Catatan_transaksiController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catatan_transaksi = Catatan_transaksi::all();
        // return view("catatan_transaksi.index", compact("catatan_transaksi"));
        return response()->json($catatan_transaksi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("catatan_transaksi.create");
        return response()->json(Catatan_transaksi::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $catatan_transaksi = Catatan_transaksi::create($request->all());
        // return redirect()->route("catatan_transaksi.index")->with("success","");
        return response()->json($catatan_transaksi)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catatan_transaksi = Catatan_transaksi::find($id);
        if (!$catatan_transaksi) return response()->json(null,404);
        // return view("catatan_transaksi.show", compact("catatan_transaksi"));
        return response()->json($catatan_transaksi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catatan_transaksi = Catatan_transaksi::find($id);
        if (!$catatan_transaksi) return response()->json(null,404);
        // return view("catatan_transaksi.edit", compact("catatan_transaksi"));
        return response()->json($catatan_transaksi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catatan_transaksi = Catatan_transaksi::find($id);
        if (!$catatan_transaksi) return response()->json(null,404);
        $catatan_transaksi->update($request->all());
        // return redirect()->route("catatan_transaksi.index")->with("success","");
        return response()->json($catatan_transaksi)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catatan_transaksi = Catatan_transaksi::find($id);
        if (!$catatan_transaksi) return response()->json(null,404);
        $catatan_transaksi->delete();
        // return redirect()->route("catatan_transaksi.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
