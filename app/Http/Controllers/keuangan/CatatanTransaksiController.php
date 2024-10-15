<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\CatatanTransaksi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CatatanTransaksiController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = CatatanTransaksi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $catatanTransaksi = CatatanTransaksi::find($id);

            if (!$catatanTransaksi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $catatanTransaksi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'detail' => 'required',
                'amount' => 'required|integer',
                'category' => 'required',
            ]);

            $data = CatatanTransaksi::create($validated);

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
                'detail' => 'required',
                'amount' => 'required|integer',
                'category' => 'required',
            ]);

            $catatanTransaksi = CatatanTransaksi::find($id);

            if (!$catatanTransaksi) return $this->sendResponse(404, false, null);

            $catatanTransaksi->update($validated);

            return $this->sendResponse(200, true, $catatanTransaksi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $catatanTransaksi = CatatanTransaksi::find($id);

            if (!$catatanTransaksi) return $this->sendResponse(404, false, null);

            $data = $catatanTransaksi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
