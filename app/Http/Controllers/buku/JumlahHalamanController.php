<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\JumlahHalaman;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JumlahHalamanController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = JumlahHalaman::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $jumlahHalaman = JumlahHalaman::find($id);

            if (!$jumlahHalaman) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $jumlahHalaman);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'total_pages' => 'required|integer',
                'paper_type' => 'required',
                'dimensions' => 'required',
            ]);

            $data = JumlahHalaman::create($validated);

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
                'total_pages' => 'required|integer',
                'paper_type' => 'required',
                'dimensions' => 'required',
            ]);

            $jumlahHalaman = JumlahHalaman::find($id);

            if (!$jumlahHalaman) return $this->sendResponse(404, false, null);

            $jumlahHalaman->update($validated);

            return $this->sendResponse(200, true, $jumlahHalaman);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $jumlahHalaman = JumlahHalaman::find($id);

            if (!$jumlahHalaman) return $this->sendResponse(404, false, null);

            $data = $jumlahHalaman->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
