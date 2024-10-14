<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\kesehatan\ManajemenStres;

class ManajemenStresController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = ManajemenStres::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $manajemenStres = ManajemenStres::find($id);

            if (!$manajemenStres) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $manajemenStres);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'stress_factor' => 'required',
                'coping_strategy' => 'required',
                'stress_level' => 'required|integer',
            ]);
            $data = ManajemenStres::create($validated);

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
                'stress_factor' => 'required',
                'coping_strategy' => 'required',
                'stress_level' => 'required|integer',
            ]);
            $manajemenStres = ManajemenStres::find($id);

            if (!$manajemenStres) return $this->sendResponse(404, false, null);

            $manajemenStres->update($validated);

            return $this->sendResponse(200, true, $manajemenStres);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $manajemenStres = ManajemenStres::find($id);

            if (!$manajemenStres) return $this->sendResponse(404, false, null);

            $data = $manajemenStres->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
