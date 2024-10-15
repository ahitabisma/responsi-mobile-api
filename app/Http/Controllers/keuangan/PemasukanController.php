<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Pemasukan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PemasukanController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Pemasukan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $pemasukan = Pemasukan::find($id);

            if (!$pemasukan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $pemasukan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'source' => 'required',
                'amount' => 'required|integer',
                'frequency' => 'required',
            ]);

            $data = Pemasukan::create($validated);

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
                'source' => 'required',
                'amount' => 'required|integer',
                'frequency' => 'required',
            ]);

            $pemasukan = Pemasukan::find($id);

            if (!$pemasukan) return $this->sendResponse(404, false, null);

            $pemasukan->update($validated);

            return $this->sendResponse(200, true, $pemasukan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $pemasukan = Pemasukan::find($id);

            if (!$pemasukan) return $this->sendResponse(404, false, null);

            $data = $pemasukan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
