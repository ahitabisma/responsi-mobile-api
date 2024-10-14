<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\RiwayatAlergi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RiwayatAlergiController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = RiwayatAlergi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $riwayatAlergi = RiwayatAlergi::find($id);

            if (!$riwayatAlergi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $riwayatAlergi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'allergen' => 'required',
                'reaction' => 'required',
                'severity_scale' => 'required|integer',
            ]);
            $data = RiwayatAlergi::create($validated);

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
                'allergen' => 'required',
                'reaction' => 'required',
                'severity_scale' => 'required|integer',
            ]);
            $riwayatAlergi = RiwayatAlergi::find($id);

            if (!$riwayatAlergi) return $this->sendResponse(404, false, null);

            $riwayatAlergi->update($validated);

            return $this->sendResponse(200, true, $riwayatAlergi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $riwayatAlergi = RiwayatAlergi::find($id);

            if (!$riwayatAlergi) return $this->sendResponse(404, false, null);

            $data = $riwayatAlergi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
