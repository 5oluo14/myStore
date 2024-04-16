<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ReportController extends Controller
{
    public function productStockReport()
    {
        $records = Product::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->with(['category', 'vendor'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.reports.products', compact('records'));
    }
}
