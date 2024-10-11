<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\Bahasa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BahasaController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Bahasa::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $bahasa = Bahasa::find($id);

            if (!$bahasa) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $bahasa);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'original_language' => 'required',
                'translated_language' => 'required',
                'translator_name' => 'required',
            ]);

            $data = Bahasa::create($validated);

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
                'original_language' => 'required',
                'translated_language' => 'required',
                'translator_name' => 'required',
            ]);

            $bahasa = Bahasa::find($id);

            if (!$bahasa) return $this->sendResponse(404, false, null);

            $bahasa->update($validated);

            return $this->sendResponse(200, true, $bahasa);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $bahasa = Bahasa::find($id);

            if (!$bahasa) return $this->sendResponse(404, false, null);

            $data = $bahasa->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
