<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\PemanduWisata;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PemanduWisataController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = PemanduWisata::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $pemanduWisata = PemanduWisata::find($id);

            if (!$pemanduWisata) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $pemanduWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'guide' => 'required',
                'languages' => 'required',
                'rating' => 'required|integer',
            ]);
			$data = PemanduWisata::create($validated);

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
                'guide' => 'required',
                'languages' => 'required',
                'rating' => 'required|integer',
            ]); 
            $pemanduWisata = PemanduWisata::find($id);

            if (!$pemanduWisata) return $this->sendResponse(404, false, null);

            $pemanduWisata->update($validated);

            return $this->sendResponse(200, true, $pemanduWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $pemanduWisata = PemanduWisata::find($id);

            if (!$pemanduWisata) return $this->sendResponse(404, false, null);

            $data = $pemanduWisata->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}