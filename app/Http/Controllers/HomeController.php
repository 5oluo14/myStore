<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Client;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use App\Models\BuyingProduct;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home()
    {
        $dataCounts = [];
        $dataCounts['vendors'] = Vendor::count();
        $dataCounts['clients'] = Client::count();
        $dataCounts['admins'] = User::count();
        $dataCounts['categories'] = Category::count();
        $dataCounts['products'] = Product::count();
        $dataCounts['orders'] = Order::count();
        $dataCounts['buying_Products'] = BuyingProduct::count();
        $products = Product::where('quantity', '<=', DB::raw('min_quantity'))->select('quantity', 'name')->pluck('quantity', 'name');
        return view('admin.home.index', compact('dataCounts', 'products'));
    }
}
