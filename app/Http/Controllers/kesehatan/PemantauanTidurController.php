<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\PemantauanTidur;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PemantauanTidurController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = PemantauanTidur::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $pemantauanTidur = PemantauanTidur::find($id);

            if (!$pemantauanTidur) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $pemantauanTidur);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'sleep_quality' => 'required',
                'sleep_hours' => 'required|integer',
                'sleep_disorders' => 'required',
            ]);
            $data = PemantauanTidur::create($validated);

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
                'sleep_quality' => 'required',
                'sleep_hours' => 'required|integer',
                'sleep_disorders' => 'required',
            ]);
            $pemantauanTidur = PemantauanTidur::find($id);

            if (!$pemantauanTidur) return $this->sendResponse(404, false, null);

            $pemantauanTidur->update($validated);

            return $this->sendResponse(200, true, $pemantauanTidur);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $pemantauanTidur = PemantauanTidur::find($id);

            if (!$pemantauanTidur) return $this->sendResponse(404, false, null);

            $data = $pemantauanTidur->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
