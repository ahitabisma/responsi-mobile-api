<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\MataUang;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MataUangController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = MataUang::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $mataUang = MataUang::find($id);

            if (!$mataUang) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $mataUang);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'currency' => 'required',
                'exchange_rate' => 'required|integer',
                'symbol' => 'required',
            ]);

            $data = MataUang::create($validated);

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
                'currency' => 'required',
                'exchange_rate' => 'required|integer',
                'symbol' => 'required',
            ]);

            $mataUang = MataUang::find($id);

            if (!$mataUang) return $this->sendResponse(404, false, null);

            $mataUang->update($validated);

            return $this->sendResponse(200, true, $mataUang);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $mataUang = MataUang::find($id);

            if (!$mataUang) return $this->sendResponse(404, false, null);

            $data = $mataUang->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
