<?php

namespace App\Http\Controllers\kesehatan;

use App\Http\Controllers\BaseController;
use App\Models\kesehatan\KesehatanMental;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class KesehatanMentalController extends BaseController
{
    // Get All
    public function index(): JsonResponse
    {
        try {
            $data = KesehatanMental::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show
    public function show(int $id): JsonResponse
    {
        try {
            $kesehatanMental = KesehatanMental::find($id);

            if (!$kesehatanMental) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $kesehatanMental);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'mental_state' => 'required',
                'therapy_sessions' => 'required|integer',
                'medication' => 'required',
            ]);
            $data = KesehatanMental::create($validated);

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
                'mental_state' => 'required',
                'therapy_sessions' => 'required|integer',
                'medication' => 'required',
            ]);
            $kesehatanMental = KesehatanMental::find($id);

            if (!$kesehatanMental) return $this->sendResponse(404, false, null);

            $kesehatanMental->update($validated);

            return $this->sendResponse(200, true, $kesehatanMental);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete
    public function destroy(int $id): JsonResponse
    {
        try {
            $kesehatanMental = KesehatanMental::find($id);

            if (!$kesehatanMental) return $this->sendResponse(404, false, null);

            $data = $kesehatanMental->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
