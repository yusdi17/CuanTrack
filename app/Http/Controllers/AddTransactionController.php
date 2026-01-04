<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddTransactionRequest;

class AddTransactionController extends Controller
{
    public function store(AddTransactionRequest $request)
    {
        $validate = $request->validated();

        DB::beginTransaction();
        try {
            $transaction = Sale::create([
                'product_id' => $validate['product_id'],
                'date' => $validate['date'],
                'total_amount' => $validate['total_amount'],
                'fee' => $validate['fee'],
                'note' => $validate['note'] ?? null,
            ]);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Transaksi berhasil ditambahkan.',
                'data' => $transaction
            ], 201);

        } catch (Exception $e) {
            
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan transaksi.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
