<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Client;
use App\Models\User;

class HomeController extends Controller
{

    public function home()
    {
        $dataCounts = [];
        $dataCounts['vendors'] = Vendor::count();
        $dataCounts['clients'] = Client::count();
        $dataCounts['admins'] = User::count();
        return view('admin.home.index', compact('dataCounts'));
    }
}
