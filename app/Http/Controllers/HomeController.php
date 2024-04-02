<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Vendor;
use App\Models\Category;

class HomeController extends Controller
{

    public function home()
    {
        $dataCounts = [];
        $dataCounts['vendors'] = Vendor::count();
        $dataCounts['clients'] = Client::count();
        $dataCounts['admins'] = User::count();
        $dataCounts['categories'] = Category::count();
        return view('admin.home.index', compact('dataCounts'));
    }
}
