<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UlasanController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Ulasan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $ulasan = Ulasan::find($id);

            if (!$ulasan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $ulasan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'reviewer' => 'required',
                'rating' => 'required|integer',
                'comments' => 'required',
            ]);
			$data = Ulasan::create($validated);

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
                'reviewer' => 'required',
                'rating' => 'required|integer',
                'comments' => 'required',
            ]); 
            $ulasan = Ulasan::find($id);

            if (!$ulasan) return $this->sendResponse(404, false, null);

            $ulasan->update($validated);

            return $this->sendResponse(200, true, $ulasan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $ulasan = Ulasan::find($id);

            if (!$ulasan) return $this->sendResponse(404, false, null);

            $data = $ulasan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}