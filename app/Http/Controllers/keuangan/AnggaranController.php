<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Anggaran;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnggaranController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Anggaran::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $anggaran = Anggaran::find($id);

            if (!$anggaran) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $anggaran);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'budget_item' => 'required',
                'allocated' => 'required',
                'spent' => 'required|integer',
            ]);

            $data = Anggaran::create($validated);

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
                'budget_item' => 'required',
                'allocated' => 'required',
                'spent' => 'required|integer',
            ]);

            $anggaran = Anggaran::find($id);

            if (!$anggaran) return $this->sendResponse(404, false, null);

            $anggaran->update($validated);

            return $this->sendResponse(200, true, $anggaran);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $anggaran = Anggaran::find($id);

            if (!$anggaran) return $this->sendResponse(404, false, null);

            $data = $anggaran->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
