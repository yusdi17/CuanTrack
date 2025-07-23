<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['product_id', 'date', 'total_amount', 'note'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function category()
    {
        return $this->product?->category();
    }

}
