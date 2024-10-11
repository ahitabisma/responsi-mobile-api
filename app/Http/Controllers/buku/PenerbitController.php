<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\Penerbit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PenerbitController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Penerbit::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $penerbit = Penerbit::find($id);

            if (!$penerbit) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $penerbit);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'publisher_name' => 'required',
                'established_year' => 'required|integer',
                'country' => 'required',
            ]);

            $data = Penerbit::create($validated);

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
                'publisher_name' => 'required',
                'established_year' => 'required|integer',
                'country' => 'required',
            ]);

            $penerbit = Penerbit::find($id);

            if (!$penerbit) return $this->sendResponse(404, false, null);

            $penerbit->update($validated);

            return $this->sendResponse(200, true, $penerbit);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $penerbit = Penerbit::find($id);

            if (!$penerbit) return $this->sendResponse(404, false, null);
            
            $data = $penerbit->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
