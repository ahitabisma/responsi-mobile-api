<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PaketWisataController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = PaketWisata::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $paketWisata = PaketWisata::find($id);

            if (!$paketWisata) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $paketWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'package' => 'required',
                'price' => 'required|integer',
                'activities' => 'required',
            ]);
			$data = PaketWisata::create($validated);

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
                'package' => 'required',
                'price' => 'required|integer',
                'activities' => 'required',
            ]); 
            $paketWisata = PaketWisata::find($id);

            if (!$paketWisata) return $this->sendResponse(404, false, null);

            $paketWisata->update($validated);

            return $this->sendResponse(200, true, $paketWisata);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $paketWisata = PaketWisata::find($id);

            if (!$paketWisata) return $this->sendResponse(404, false, null);

            $data = $paketWisata->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}