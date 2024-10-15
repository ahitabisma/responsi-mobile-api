<?php

namespace App\Http\Controllers\pariwisata;

use App\Http\Controllers\BaseController;
use App\Models\pariwisata\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FasilitasController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Fasilitas::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $fasilitas = Fasilitas::find($id);

            if (!$fasilitas) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $fasilitas);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'facility' => 'required',
                'type' => 'required',
                'status' => 'required',
            ]);
			$data = Fasilitas::create($validated);

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
                'facility' => 'required',
                'type' => 'required',
                'status' => 'required',
            ]); 
            $fasilitas = Fasilitas::find($id);

            if (!$fasilitas) return $this->sendResponse(404, false, null);

            $fasilitas->update($validated);

            return $this->sendResponse(200, true, $fasilitas);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $fasilitas = Fasilitas::find($id);

            if (!$fasilitas) return $this->sendResponse(404, false, null);

            $data = $fasilitas->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}