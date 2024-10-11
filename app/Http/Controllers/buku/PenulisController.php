<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Models\buku\Penulis;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PenulisController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Penulis::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $penulis = Penulis::find($id);

            if (!$penulis) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $penulis);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'author_name' => 'required',
                'nationality' => 'required',
                'birth_year' => 'required|integer',
            ]);

            $data = Penulis::create($validated);

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
                'author_name' => 'required',
                'nationality' => 'required',
                'birth_year' => 'required|integer',
            ]);

            $penulis = Penulis::find($id);

            if (!$penulis) return $this->sendResponse(404, false, null);

            $penulis->update($validated);

            return $this->sendResponse(200, true, $penulis);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $penulis = Penulis::find($id);

            if (!$penulis) return $this->sendResponse(404, false, null);
            
            $data = $penulis->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
