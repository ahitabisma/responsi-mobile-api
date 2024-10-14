<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\PengingatObat;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PengingatObatController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = PengingatObat::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $pengingatObat = PengingatObat::find($id);

            if (!$pengingatObat) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $pengingatObat);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'medicine_name' => 'required',
                'dosage_mg' => 'required|integer',
                'times_per_day' => 'required|integer',
            ]);
            $data = PengingatObat::create($validated);

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
                'medicine_name' => 'required',
                'dosage_mg' => 'required|integer',
                'times_per_day' => 'required|integer',
            ]);
            $pengingatObat = PengingatObat::find($id);

            if (!$pengingatObat) return $this->sendResponse(404, false, null);

            $pengingatObat->update($validated);

            return $this->sendResponse(200, true, $pengingatObat);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $pengingatObat = PengingatObat::find($id);

            if (!$pengingatObat) return $this->sendResponse(404, false, null);

            $data = $pengingatObat->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
