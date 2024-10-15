<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Investasi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InvestasiController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Investasi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $investasi = Investasi::find($id);

            if (!$investasi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $investasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'investment' => 'required',
                'value' => 'required|integer',
                'portfolio' => 'required',
            ]);

            $data = Investasi::create($validated);

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
                'investment' => 'required',
                'value' => 'required|integer',
                'portfolio' => 'required',
            ]);

            $investasi = Investasi::find($id);

            if (!$investasi) return $this->sendResponse(404, false, null);

            $investasi->update($validated);

            return $this->sendResponse(200, true, $investasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $investasi = Investasi::find($id);

            if (!$investasi) return $this->sendResponse(404, false, null);

            $data = $investasi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
