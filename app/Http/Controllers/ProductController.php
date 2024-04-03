<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Product::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('product'), function ($q) {
                $q->where('name', 'like', '%' . request('product') . '%');
            })
            ->when(request('vendor_id'), function ($q) {
                $q->where('vendor_id', request('vendor_id'));
            })
            ->when(request('category_id'), function ($q) {
                $q->where('category_id', request('category_id'));
            })
            ->with(['category', 'vendor'])
            ->orderBy('id', 'desc')
            ->paginate(10);

        $create_route = 'products.create';
        $edit_route = 'products.edit';
        $destroy_route = 'products.destroy';
        return view('admin.products.index', compact('records', 'create_route', 'edit_route', 'destroy_route'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store_route = 'products.store';
        return view('admin.products.create', compact('store_route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $product = Product::create($data);
            $product->buyingProducts()->create([
                'product_id' => $product->id,
                'quantity' => $data['quantity'],
                'price' => $data['buying_price'],
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('products.index')->with('fail', __('حدث خطأ، الرجاء المحاولة مره اخرى'));
        }
        return redirect()->route('products.index')->with('success', __('تم الاضافة بنجاح'));
    }

    public function edit($id)
    {
        $record = Product::findOrFail($id);
        $update_route = 'products.update';
        return view('admin.products.edit', compact('update_route', 'record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect()->route('products.index')->with('success', __('تم التعديل بنجاح'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $id = $product->id;
        $product->delete();

        return response()->json([
            'status' => 1,
            'message' => __('تم الحذف بنجاح'),
            'id' => $id
        ]);
    }

    public function addQuantity(Request $request, $id)
    {
        $product = Product::findOrFail($id);


        DB::beginTransaction();
        try {
            $product->update([
                'quantity' => $product->quantity + $request->quantity
            ]);
            $product->buyingProducts()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->buying_price,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('products.index')->with('fail', __('حدث خطأ، الرجاء المحاولة مره اخرى'));
        }

        return redirect()->route('products.index')->with('success', 'تم اضافة الكمية بنجاح');
    }
}
