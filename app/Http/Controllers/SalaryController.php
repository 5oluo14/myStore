<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function paySalary($id, Request $request)
    {
        $user = User::findOrFail($id);
        Salary::create([
            'user_id' => $id,
            'amount' => $request->amount
        ]);
        return redirect()->route('admins.index')->with('success', 'تم دفع المرتب بنجاح');
    }
}