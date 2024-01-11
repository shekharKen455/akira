<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'product_id',
        'quantity',
        'price',
        'length',
        'style',
        'plating_color',
        'custom_text',
        'custom_image',
        'lang',
        'font'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
