<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\JadwalVaksinasi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JadwalVaksinasiController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = JadwalVaksinasi::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $jadwalVaksinasi = JadwalVaksinasi::find($id);

            if (!$jadwalVaksinasi) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $jadwalVaksinasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'person_name' => 'required',
                'vaccine_type' => 'required',
                'age' => 'required|integer',
            ]);
            $data = JadwalVaksinasi::create($validated);

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
                'person_name' => 'required',
                'vaccine_type' => 'required',
                'age' => 'required|integer',
            ]);
            $jadwalVaksinasi = JadwalVaksinasi::find($id);

            if (!$jadwalVaksinasi) return $this->sendResponse(404, false, null);

            $jadwalVaksinasi->update($validated);

            return $this->sendResponse(200, true, $jadwalVaksinasi);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $jadwalVaksinasi = JadwalVaksinasi::find($id);

            if (!$jadwalVaksinasi) return $this->sendResponse(404, false, null);

            $data = $jadwalVaksinasi->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
