<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\DataNutrisi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DataNutrisiController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = DataNutrisi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $dataNutrisi = DataNutrisi::find($id);

            if (!$dataNutrisi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $dataNutrisi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'food_item' => 'required',
                'calories' => 'required|integer',
                'fat_content' => 'required|integer',
            ]);
            $data = DataNutrisi::create($validated);

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
                'food_item' => 'required',
                'calories' => 'required|integer',
                'fat_content' => 'required|integer',
            ]);
            $dataNutrisi = DataNutrisi::find($id);

            if (!$dataNutrisi) return $this->sendResponse(404, false, null);

            $dataNutrisi->update($validated);

            return $this->sendResponse(200, true, $dataNutrisi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $dataNutrisi = DataNutrisi::find($id);

            if (!$dataNutrisi) return $this->sendResponse(404, false, null);

            $data = $dataNutrisi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
