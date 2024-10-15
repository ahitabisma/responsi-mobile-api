<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\HargaTiket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HargaTiketController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = HargaTiket::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $hargaTiket = HargaTiket::find($id);

            if (!$hargaTiket) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $hargaTiket);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'event' => 'required',
                'price' => 'required|integer',
                'seat' => 'required',
            ]);
			$data = HargaTiket::create($validated);

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
                'event' => 'required',
                'price' => 'required|integer',
                'seat' => 'required',
            ]);
            $hargaTiket = HargaTiket::find($id);

            if (!$hargaTiket) return $this->sendResponse(404, false, null);

            $hargaTiket->update($validated);

            return $this->sendResponse(200, true, $hargaTiket);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $hargaTiket = HargaTiket::find($id);

            if (!$hargaTiket) return $this->sendResponse(404, false, null);

            $data = $hargaTiket->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}