<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'vendor_id',
        'name',
        'description',
        'quantity',
        'saled_quantity',
        'selling_price',
        'buying_price',
        'min_quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function buyingProducts()
    {
        return $this->hasMany(BuyingProduct::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Product::class)->using(OrderProduct::class);
    }
}
