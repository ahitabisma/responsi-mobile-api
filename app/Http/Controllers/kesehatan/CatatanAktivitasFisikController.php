<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\CatatanAktivitasFisik;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CatatanAktivitasFisikController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = CatatanAktivitasFisik::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $catatanAktivitasFisik = CatatanAktivitasFisik::find($id);

            if (!$catatanAktivitasFisik) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $catatanAktivitasFisik);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'activity_name' => 'required',
                'duration' => 'required|integer',
                'intensity' => 'required',
            ]);
            $data = CatatanAktivitasFisik::create($validated);

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
                'activity_name' => 'required',
                'duration' => 'required|integer',
                'intensity' => 'required',
            ]);
            $catatanAktivitasFisik = CatatanAktivitasFisik::find($id);

            if (!$catatanAktivitasFisik) return $this->sendResponse(404, false, null);

            $catatanAktivitasFisik->update($validated);

            return $this->sendResponse(200, true, $catatanAktivitasFisik);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $catatanAktivitasFisik = CatatanAktivitasFisik::find($id);

            if (!$catatanAktivitasFisik) return $this->sendResponse(404, false, null);

            $data = $catatanAktivitasFisik->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
