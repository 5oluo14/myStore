<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Client;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use App\Models\BuyingProduct;

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
        return view('admin.home.index', compact('dataCounts'));
    }
}
