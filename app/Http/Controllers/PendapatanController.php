<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Sale;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    public function getTodayIncome()
    {
        try {
            $today = Carbon::today();

            //kotor
            $grossIncome = Sale::whereDate('date', $today)
                ->sum('total_amount');

            //bersih
            $netIncome = Sale::whereDate('date', $today)
                ->sum('fee');

            return response()->json([
                'success' => true,
                'message' => 'Data pendapatan hari ini (' . $today->format('d M Y') . ') berhasil diambil.',
                'data' => [
                    'date' => $today->format('Y-m-d'),
                    'gross_income' => (float) $grossIncome,
                    'net_income'   => (float) $netIncome,
                ]
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data pendapatan.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
