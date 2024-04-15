<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\User;

class SalaryController extends Controller
{
    public function paySalary($id)
    {
        $user = User::findOrFail($id);
        Salary::create([
            'user_id' => $id,
            'amount' => $user->salary
        ]);
        return redirect()->route('admins.index')->with('success', 'تم دفع المرتب بنجاح');
    }
}
