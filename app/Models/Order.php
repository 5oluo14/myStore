<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'client_id',
        'total_quantity',
        'total_price',
        'total_profit'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(OrderProduct::class)->withPivot('quantity', 'profit', 'price');
    }
}
