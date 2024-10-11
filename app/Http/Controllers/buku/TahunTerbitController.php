<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\TahunTerbit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TahunTerbitController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = TahunTerbit::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $tahunTerbit = TahunTerbit::find($id);

            if (!$tahunTerbit) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $tahunTerbit);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'publication_year' => 'required|integer',
                'edition_number' => 'required|integer',
                'language' => 'required',
            ]);

            $data = TahunTerbit::create($validated);

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
                'publication_year' => 'required|integer',
                'edition_number' => 'required|integer',
                'language' => 'required',
            ]);

            $tahunTerbit = TahunTerbit::find($id);

            if (!$tahunTerbit) return $this->sendResponse(404, false, null);

            $tahunTerbit->update($validated);

            return $this->sendResponse(200, true, $tahunTerbit);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $tahunTerbit = TahunTerbit::find($id);

            if (!$tahunTerbit) return $this->sendResponse(404, false, null);

            $data = $tahunTerbit->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
