<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\JadwalKeberangkatan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class JadwalKeberangkatanController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = JadwalKeberangkatan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $jadwalKeberangkatan = JadwalKeberangkatan::find($id);

            if (!$jadwalKeberangkatan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $jadwalKeberangkatan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'transport' => 'required',
                'route' => 'required',
                'frequency' => 'required|integer',
            ]);
			$data = JadwalKeberangkatan::create($validated);

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
                'transport' => 'required',
                'route' => 'required',
                'frequency' => 'required|integer',
            ]); 
            $jadwalKeberangkatan = JadwalKeberangkatan::find($id);

            if (!$jadwalKeberangkatan) return $this->sendResponse(404, false, null);

            $jadwalKeberangkatan->update($validated);

            return $this->sendResponse(200, true, $jadwalKeberangkatan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $jadwalKeberangkatan = JadwalKeberangkatan::find($id);

            if (!$jadwalKeberangkatan) return $this->sendResponse(404, false, null);

            $data = $jadwalKeberangkatan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}