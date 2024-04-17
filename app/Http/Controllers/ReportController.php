<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Salary;

class ReportController extends Controller
{

    public function index()
    {
        return view('admin.reports.index');
    }
    public function productStockReport()
    {
        $records = Product::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->with(['category', 'vendor'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        $title = 'ارصده المنتجات';
        return view('admin.reports.products', compact('records', 'title'));
    }

    public function productMinStockReport()
    {
        $records = Product::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->where('quantity', '<=', \DB::raw('min_quantity'))
            ->with(['category', 'vendor'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        $title = 'الحد الادني من ارصده المنتجات ';
        return view('admin.reports.products', compact('records', 'title'));
    }

    public function salaryReport()
    {
        $records = Salary::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->with('user')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.reports.salaries', compact('records'));
    }

    public function dealWithClientReport()
    {
        $records = Client::when(request('from_date'), function ($q) {

            $q->whereHas('orders', function ($query) {
                $query->where('created_at', '>=', request('from_date'))
                    ->where('created_at', '<=', request('to_date'));
            });
        })
            ->with('orders')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.reports.dealing', compact('records'));
    }
}
