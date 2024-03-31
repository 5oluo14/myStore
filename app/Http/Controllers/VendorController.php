<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\VendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = Vendor::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('vendor'), function ($q) {
                $q->where('name', 'like', '%' . request('vendor') . '%');
            })
            ->when(request('phone'), function ($q) {
                $q->where('phone', 'like', '%' . request('phone') . '%');
            })
            ->when(request('email'), function ($q) {
                $q->where('email', 'like', '%' . request('email') . '%');
            })
            ->when(request('address'), function ($q) {
                $q->where('address', 'like', '%' . request('address') . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        $create_route = 'vendors.create';
        return view('admin.vendors.index', compact('records', 'create_route'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store_route = 'vendors.store';
        return view('admin.vendors.create', compact('store_route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorRequest $request)
    {
        $data = $request->validated();
        $vendor = Vendor::create($data);
        return redirect()->route('vendors.index')->with('success', __('تم الاضافة بنجاح'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $record = Vendor::findOrFail($id);
        $update_route = 'vendors.update';
        return view('admin.vendors.edit', compact('update_route', 'record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendorRequest $request, Vendor $vendor)
    {
        $data = $request->validated();
        $vendor->update($data);
        return redirect()->route('vendors.index')->with('success', __('تم التعديل بنجاح'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        $id = $vendor->id;
        $vendor->delete();

        return response()->json([
            'status' => 1,
            'message' => __('تم الحذف بنجاح'),
            'id' => $id
        ]);
    }
}
