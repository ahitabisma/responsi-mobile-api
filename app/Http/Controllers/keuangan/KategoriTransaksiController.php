<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\KategoriTransaksi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KategoriTransaksiController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = KategoriTransaksi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $kategoriTransaksi = KategoriTransaksi::find($id);

            if (!$kategoriTransaksi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $kategoriTransaksi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'transaction' => 'required',
                'type' => 'required',
                'amount' => 'required|integer',
            ]);

            $data = KategoriTransaksi::create($validated);

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Update 
    public function update(Request $request, int $id): JsonResponse
    {
        try {
            $validated = $request->validate([
                'transaction' => 'required',
                'type' => 'required',
                'amount' => 'required|integer',
            ]);

            $kategoriTransaksi = KategoriTransaksi::find($id);

            if (!$kategoriTransaksi) return $this->sendResponse(404, false, null);

            $kategoriTransaksi->update($validated);

            return $this->sendResponse(200, true, $kategoriTransaksi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $kategoriTransaksi = KategoriTransaksi::find($id);

            if (!$kategoriTransaksi) return $this->sendResponse(404, false, null);

            $data = $kategoriTransaksi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
