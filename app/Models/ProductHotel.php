<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductHotel extends Model
{
    use HasFactory, SoftDeletes;

     protected $fillable = [
        'hotel_id',
        'product_id',
    ];

    public function hotel():BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
