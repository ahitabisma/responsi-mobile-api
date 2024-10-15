<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\Transportasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TransportasiController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Transportasi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $transportasi = Transportasi::find($id);

            if (!$transportasi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $transportasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'vehicle' => 'required',
                'company' => 'required',
                'capacity' => 'required|integer',
            ]);
			$data = Transportasi::create($validated);

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
                'vehicle' => 'required',
                'company' => 'required',
                'capacity' => 'required|integer',
            ]); 
            $transportasi = Transportasi::find($id);

            if (!$transportasi) return $this->sendResponse(404, false, null);

            $transportasi->update($validated);

            return $this->sendResponse(200, true, $transportasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $transportasi = Transportasi::find($id);

            if (!$transportasi) return $this->sendResponse(404, false, null);

            $data = $transportasi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}