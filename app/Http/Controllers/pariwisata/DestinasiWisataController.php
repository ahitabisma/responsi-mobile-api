<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\DestinasiWisata;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DestinasiWisataController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = DestinasiWisata::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $destinasiWisata = DestinasiWisata::find($id);

            if (!$destinasiWisata) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $destinasiWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'destination' => 'required',
                'location' => 'required',
                'attraction' => 'required',
            ]);
			$data = DestinasiWisata::create($validated);

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
                'destination' => 'required',
                'location' => 'required',
                'attraction' => 'required',
            ]); 
            $destinasiWisata = DestinasiWisata::find($id);

            if (!$destinasiWisata) return $this->sendResponse(404, false, null);

            $destinasiWisata->update($validated);

            return $this->sendResponse(200, true, $destinasiWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $destinasiWisata = DestinasiWisata::find($id);

            if (!$destinasiWisata) return $this->sendResponse(404, false, null);

            $data = $destinasiWisata->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}