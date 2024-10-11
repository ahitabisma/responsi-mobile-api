<?php

namespace App\Http\Controllers\buku;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\buku\Rating;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RatingController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Rating::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $rating = Rating::find($id);

            if (!$rating) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $rating);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'average_rating' => 'required|integer',
                'total_reviews' => 'required|integer',
                'best_seller_rank' => 'required|integer',
            ]);

            $data = Rating::create($validated);

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
                'average_rating' => 'required|integer',
                'total_reviews' => 'required|integer',
                'best_seller_rank' => 'required|integer',
            ]);

            $rating = Rating::find($id);

            if (!$rating) return $this->sendResponse(404, false, null);

            $rating->update($validated);

            return $this->sendResponse(200, true, $rating);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $rating = Rating::find($id);

            if (!$rating) return $this->sendResponse(404, false, null);

            $data = $rating->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
