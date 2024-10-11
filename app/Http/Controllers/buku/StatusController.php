<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\Status;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StatusController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Status::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $status = Status::find($id);

            if (!$status) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $status);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'availability' => 'required',
                'borrower_name' => 'required',
                'due_days' => 'required|integer',
            ]);

            $data = Status::create($validated);

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
                'availability' => 'required',
                'borrower_name' => 'required',
                'due_days' => 'required|integer',
            ]);

            $status = Status::find($id);

            if (!$status) return $this->sendResponse(404, false, null);

            $status->update($validated);

            return $this->sendResponse(200, true, $status);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $status = Status::find($id);

            if (!$status) return $this->sendResponse(404, false, null);
            
            $data = $status->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
