<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $records = User::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('user'), function ($q) {
                $q->where('name', 'like', '%' . request('user') . '%');
            })

            ->when(request('email'), function ($q) {
                $q->where('email', 'like', '%' . request('email') . '%');
            })

            ->when(request('phone'), function ($q) {
                $q->where('phone', 'like', '%' . request('phone') . '%');
            })

            ->when(request('address'), function ($q) {
                $q->where('address', 'like', '%' . request('address') . '%');
            })

            ->when(request('salary'), function ($q) {
                $q->where('salary', 'like', '%' . request('salary') . '%');
            })

            ->when(request('work_hours'), function ($q) {
                $q->where('work_hours', 'like', '%' . request('work_hours') . '%');
            })
            ->with('salaries')
            ->orderBy('id', 'desc')
            ->paginate(10);
        $create_route = 'admins.create';
        return view('admin.admins.index', compact('records', 'create_route'));
    }

    public function create()
    {
        $store_route = 'admins.store';
        return view('admin.admins.create', compact('store_route'));
    }

    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $admin = User::create($data);
        return redirect()->route('admins.index')->with('success', __('تم الاضافة بنجاح'));
    }

    public function edit($id)
    {
        // $edit_route = [];
        $record = User::findOrFail($id);
        $update_route = 'admins.update';
        return view('admin.admins.edit', compact('update_route', 'record'));
    }

    public function update(AdminRequest $request, $id)
    {
        $data = $request->validated();
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('admins.index')->with('success', __('تم التعديل بنجاح'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([
            'status' => 1,
            'message' => __('تم الحذف بنجاح'),
            'id' => $id
        ]);
    }
}
