<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\LaporanBulanan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LaporanBulananController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = LaporanBulanan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $laporanBulanan = LaporanBulanan::find($id);

            if (!$laporanBulanan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $laporanBulanan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'month' => 'required',
                'income' => 'required|integer',
                'expenses' => 'required|integer',
            ]);

            $data = LaporanBulanan::create($validated);

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
                'month' => 'required',
                'income' => 'required|integer',
                'expenses' => 'required|integer',
            ]);

            $laporanBulanan = LaporanBulanan::find($id);

            if (!$laporanBulanan) return $this->sendResponse(404, false, null);

            $laporanBulanan->update($validated);

            return $this->sendResponse(200, true, $laporanBulanan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $laporanBulanan = LaporanBulanan::find($id);

            if (!$laporanBulanan) return $this->sendResponse(404, false, null);

            $data = $laporanBulanan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
