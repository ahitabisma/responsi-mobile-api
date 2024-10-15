<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\HutangPiutang;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HutangPiutangController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = HutangPiutang::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $hutangPiutang = HutangPiutang::find($id);

            if (!$hutangPiutang) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $hutangPiutang);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'person' => 'required',
                'amount' => 'required|integer',
                'status' => 'required',
            ]);

            $data = HutangPiutang::create($validated);

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
                'person' => 'required',
                'amount' => 'required|integer',
                'status' => 'required',
            ]);

            $hutangPiutang = HutangPiutang::find($id);

            if (!$hutangPiutang) return $this->sendResponse(404, false, null);

            $hutangPiutang->update($validated);

            return $this->sendResponse(200, true, $hutangPiutang);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $hutangPiutang = HutangPiutang::find($id);

            if (!$hutangPiutang) return $this->sendResponse(404, false, null);

            $data = $hutangPiutang->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
