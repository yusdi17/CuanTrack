<?php

namespace App\Http\Controllers;

use App\Http\Resources\Sale as ResourcesSale;
use Exception;
use Carbon\Carbon;
use App\Models\Sale;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
       try {
        $month = $request->input('month', Carbon::now()->month);
        $year = $request->input('year', Carbon::now()->year);
        $date = Carbon::createFromDate($year, $month, 1);

        // Query Data
        $sales = Sale::with(['product.category'])
            ->whereYear('date', $date->year)
            ->whereMonth('date', $date->month)
            ->orderBy('date', 'desc')
            ->get();

        $totalRevenue = $sales->sum('total_amount');

        return response()->json([
            'success' => true,
            'message' => 'Data penjualan bulan ' . $date->format('F Y') . ' berhasil diambil.',
            'data' => [
                'summary' => [
                    'month' => $date->format('F'),
                    'year' => $date->year,
                    'total_revenue' => $totalRevenue,
                    'total_transactions' => $sales->count(),
                ],
                'transactions' => ResourcesSale::collection($sales), 
            ]
        ], 200);

    } catch (Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Gagal mengambil data penjualan.',
            'error' => $e->getMessage()
        ], 500);
    }
    }
}
