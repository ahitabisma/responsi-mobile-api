<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\DurasiTur;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DurasiTurController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = DurasiTur::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $durasiTur = DurasiTur::find($id);

            if (!$durasiTur) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $durasiTur);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'tour' => 'required',
                'days' => 'required|integer',
                'cost' => 'required|integer',
            ]);
			$data = DurasiTur::create($validated);

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
                'tour' => 'required',
                'days' => 'required|integer',
                'cost' => 'required|integer',
            ]); 
            $durasiTur = DurasiTur::find($id);

            if (!$durasiTur) return $this->sendResponse(404, false, null);

            $durasiTur->update($validated);

            return $this->sendResponse(200, true, $durasiTur);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $durasiTur = DurasiTur::find($id);

            if (!$durasiTur) return $this->sendResponse(404, false, null);

            $data = $durasiTur->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}