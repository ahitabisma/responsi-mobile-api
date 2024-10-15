<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\BaseController;
use App\Models\keuangan\Saldo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SaldoController extends BaseController
{
    // Get All 
    public function index(): JsonResponse
    {
        try {
            $data = Saldo::all();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Show 
    public function show(int $id): JsonResponse
    {
        try {
            $saldo = Saldo::find($id);

            if (!$saldo) return $this->sendResponse(404, false, null);

            return $this->sendResponse(200, true, $saldo);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Create 
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'account' => 'required',
                'balance' => 'required|integer',
                'status' => 'required',
            ]);

            $data = Saldo::create($validated);

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
                'account' => 'required',
                'balance' => 'required|integer',
                'status' => 'required',
            ]);

            $saldo = Saldo::find($id);

            if (!$saldo) return $this->sendResponse(404, false, null);

            $saldo->update($validated);

            return $this->sendResponse(200, true, $saldo);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }

    // Delete 
    public function destroy(int $id): JsonResponse
    {
        try {
            $saldo = Saldo::find($id);

            if (!$saldo) return $this->sendResponse(404, false, null);

            $data = $saldo->delete();

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
