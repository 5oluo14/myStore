<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

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
        return view('admin.home.index', compact('dataCounts'));
    }
}
