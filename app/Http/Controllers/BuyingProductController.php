<?php

namespace App\Http\Controllers;

use App\Models\BuyingProduct;
use Illuminate\Http\Request;

class BuyingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = BuyingProduct::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('product'), function ($q) {
                $q->whereHas('product', function ($query) {
                    $query->where('name', 'like', '%' . request('product') . '%');
                });
            })
            ->with(['product.vendor', 'product'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.buying_products.index', compact('records'));
    }
}
