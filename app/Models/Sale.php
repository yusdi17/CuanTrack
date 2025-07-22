<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['user_id', 'date', 'total_amount', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
