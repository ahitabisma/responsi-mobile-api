<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\CatatanKehamilan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CatatanKehamilanController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = CatatanKehamilan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $catatanKehamilan = CatatanKehamilan::find($id);

            if (!$catatanKehamilan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $catatanKehamilan);
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
                'gestational_week' => 'required|integer',
                'baby_weight' => 'required|integer',
            ]);
            $data = CatatanKehamilan::create($validated);

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
                'gestational_week' => 'required|integer',
                'baby_weight' => 'required|integer',
            ]);
            $catatanKehamilan = CatatanKehamilan::find($id);

            if (!$catatanKehamilan) return $this->sendResponse(404, false, null);

            $catatanKehamilan->update($validated);

            return $this->sendResponse(200, true, $catatanKehamilan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $catatanKehamilan = CatatanKehamilan::find($id);

            if (!$catatanKehamilan) return $this->sendResponse(404, false, null);

            $data = $catatanKehamilan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
