<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PenginapanController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Penginapan::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $penginapan = Penginapan::find($id);

            if (!$penginapan) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $penginapan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'accommodation' => 'required',
                'room' => 'required',
                'rate' => 'required|integer',
            ]);
			$data = Penginapan::create($validated);

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
                'accommodation' => 'required',
                'room' => 'required',
                'rate' => 'required|integer',
            ]); 
            $penginapan = Penginapan::find($id);

            if (!$penginapan) return $this->sendResponse(404, false, null);

            $penginapan->update($validated);

            return $this->sendResponse(200, true, $penginapan);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $penginapan = Penginapan::find($id);

            if (!$penginapan) return $this->sendResponse(404, false, null);

            $data = $penginapan->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}