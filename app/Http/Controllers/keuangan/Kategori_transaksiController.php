<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Kategori_transaksi;
use Illuminate\Http\Request;

class Kategori_transaksiController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_transaksi = Kategori_transaksi::all();
        // return view("kategori_transaksi.index", compact("kategori_transaksi"));
        return response()->json($kategori_transaksi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("kategori_transaksi.create");
        return response()->json(Kategori_transaksi::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_transaksi = Kategori_transaksi::create($request->all());
        // return redirect()->route("kategori_transaksi.index")->with("success","");
        return response()->json($kategori_transaksi)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori_transaksi = Kategori_transaksi::find($id);
        if (!$kategori_transaksi) return response()->json(null,404);
        // return view("kategori_transaksi.show", compact("kategori_transaksi"));
        return response()->json($kategori_transaksi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_transaksi = Kategori_transaksi::find($id);
        if (!$kategori_transaksi) return response()->json(null,404);
        // return view("kategori_transaksi.edit", compact("kategori_transaksi"));
        return response()->json($kategori_transaksi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori_transaksi = Kategori_transaksi::find($id);
        if (!$kategori_transaksi) return response()->json(null,404);
        $kategori_transaksi->update($request->all());
        // return redirect()->route("kategori_transaksi.index")->with("success","");
        return response()->json($kategori_transaksi)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori_transaksi = Kategori_transaksi::find($id);
        if (!$kategori_transaksi) return response()->json(null,404);
        $kategori_transaksi->delete();
        // return redirect()->route("kategori_transaksi.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
