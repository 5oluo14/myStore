<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SalesOperationRequest;

class SalesOperationController extends Controller
{
    public function index(Request $request)
    {
        $records = SalesOperation::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request(''), function ($q) {
                $q->where('name', 'like', '%' . request('SalesOperation') . '%');
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
        $create_route = 'salesoperations.create';
        return view('admin.salesoperations.index', compact('records', 'create_route'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store_route = 'salesoperations.store';
        return view('admin.salesoperations.create', compact('store_route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalesOperationRequest $request)
    {
        $data = $request->validated();
        $SalesOperation = SalesOperation::create($data);
        return redirect()->route('salesoperations.index')->with('success', __('تم الاضافة بنجاح'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $record = SalesOperation::findOrFail($id);
        $update_route = 'salesoperations.update';
        return view('admin.salesoperations.edit', compact('update_route', 'record'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(VendorRequest $request, Vendor $vendor)
    // {
    //     $data = $request->validated();
    //     $vendor->update($data);
    //     return redirect()->route('vendors.index')->with('success', __('تم التعديل بنجاح'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Vendor $vendor)
    // {
    //     $id = $vendor->id;
    //     $vendor->delete();

    //     return response()->json([
    //         'status' => 1,
    //         'message' => __('تم الحذف بنجاح'),
    //         'id' => $id
    //     ]);
    // }
}
