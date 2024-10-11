<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\Isbn;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IsbnController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Isbn::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $isbn = Isbn::find($id);

            if (!$isbn) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $isbn);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'isbn_code' => 'required',
                'format' => 'required',
                'print_length' => 'required|integer',
            ]);

            $data = Isbn::create($validated);

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
                'isbn_code' => 'required',
                'format' => 'required',
                'print_length' => 'required|integer',
            ]);

            $isbn = Isbn::find($id);

            if (!$isbn) return $this->sendResponse(404, false, null);

            $isbn->update($validated);

            return $this->sendResponse(200, true, $isbn);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $isbn = Isbn::find($id);

            if (!$isbn) return $this->sendResponse(404, false, null);

            $data = $isbn->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
