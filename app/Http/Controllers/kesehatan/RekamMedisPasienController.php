<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\RekamMedisPasien;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RekamMedisPasienController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = RekamMedisPasien::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $rekamMedis = RekamMedisPasien::find($id);

            if (!$rekamMedis) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $rekamMedis);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'patient_name' => 'required',
                'symptom' => 'required',
                'severity' => 'required|integer',
            ]);
            $data = RekamMedisPasien::create($validated);

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
                'patient_name' => 'required',
                'symptom' => 'required',
                'severity' => 'required|integer',
            ]);
            $rekamMedis = RekamMedisPasien::find($id);

            if (!$rekamMedis) return $this->sendResponse(404, false, null);

            $rekamMedis->update($validated);

            return $this->sendResponse(200, true, $rekamMedis);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $rekamMedis = RekamMedisPasien::find($id);

            if (!$rekamMedis) return $this->sendResponse(404, false, null);

            $data = $rekamMedis->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
