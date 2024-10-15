<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Pengeluaran;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PengeluaranController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Pengeluaran::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $pengeluaran = Pengeluaran::find($id);

            if (!$pengeluaran) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $pengeluaran);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'expense' => 'required',
                'cost' => 'required|integer',
                'category' => 'required',
            ]);

            $data = Pengeluaran::create($validated);

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
                'expense' => 'required',
                'cost' => 'required|integer',
                'category' => 'required',
            ]);

            $pengeluaran = Pengeluaran::find($id);

            if (!$pengeluaran) return $this->sendResponse(404, false, null);

            $pengeluaran->update($validated);

            return $this->sendResponse(200, true, $pengeluaran);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $pengeluaran = Pengeluaran::find($id);

            if (!$pengeluaran) return $this->sendResponse(404, false, null);

            $data = $pengeluaran->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
