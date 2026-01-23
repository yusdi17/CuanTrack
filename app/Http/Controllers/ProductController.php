<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'success' => true,
            'message' => 'Data produk berhasil diambil.',
            'data' => $products
        ]);
    }


    public function store(ProductRequest $request)
    {
        $validate = $request->validated();

        DB::beginTransaction();
        try {
            $product = Product::create([
                'name' => $validate['name'],
            ]);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil ditambahkan.',
                'data' => $product
            ], 201);

        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan produk.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(ProductRequest $request, $id)
    {
        $validate = $request->validated();

        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            $product->name = $validate['name'];
            $product->save();

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diperbarui.',
                'data' => $product
            ], 200);

        } catch (Exception $e) {

            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui produk.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus.'
            ], 200);

        } catch (Exception $e) {

            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus produk.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
