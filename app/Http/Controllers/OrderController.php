<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $records = Order::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('client'), function ($q) {
                $q->whereHas('client', function ($query) {
                    $query->where('name', 'like', '%' . request('client') . '%');
                });
            })
            ->when(request('product'), function ($q) {
                $q->whereHas('products', function ($query) {
                    $query->where('name', 'like', '%' . request('product') . '%');
                });
            })
            ->with(['client', 'products'])
            ->orderBy('id', 'desc')
            ->paginate(10);

        $create_route = 'orders.create';
        $edit_route = 'orders.edit';
        return view('admin.orders.index', compact('records', 'create_route', 'edit_route'));
    }

    public function create()
    {
        $store_route = 'orders.store';
        return view('admin.orders.create', compact('store_route'));
    }

    public function store(OrderRequest $request)
    {

        $data = $request->validated();
        $order_data = [
            'total_profit' => 0,
            'total_quantity' => 0,
            'total_price' => 0,
            'client_id' => $data['client_id']
        ];
        $items_data = [];
        foreach (json_decode($data['productList']) as $item) {
            $product = Product::findOrFail($item->product_id);
            if ($product->quantity > $product->quantity) {
                return back()->withInput()->withErrors(['quantity' => 'الكمية المدخلة اكبر من الموجوده في المخزن']);
            }

            //data for item
            $product_item = [];
            $product_item['product_id'] = $item->product_id;
            $product_item['quantity'] = $item->quantity;
            $product_item['price'] = $product->selling_price;
            $product_item['profit'] = $product->selling_price - $product->buying_price;

            $product->update([
                'quantity' => $product->quantity - $item->quantity,
                'saled_quantity' => $product->saled_quantity + $item->quantity,
            ]);

            array_push($items_data, $product_item);
            //data for order
            $order_data['total_quantity'] += $item->quantity;
            $order_data['total_profit'] += ($product->selling_price - $product->buying_price) * $item->quantity;
            $order_data['total_price'] += $product->selling_price * $item->quantity;
        }
        DB::beginTransaction();
        try {
            $order = Order::create($order_data);
            $order->products()->sync($items_data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('orders.index')->with('fail', __('حدث خطأ، الرجاء المحاولة مره اخرى'));
        }
        return redirect()->route('orders.index')->with('success', __('تم الاضافة بنجاح'));
    }

    public function edit($id)
    {
        $record = Order::findOrFail($id);
        $update_route = 'orders.update';
        return view('admin.orders.edit', compact('update_route', 'record'));
    }

    // public function update(OrderRequest $request, Order $order)
    // {
    //     $data = $request->validated();
    //     $product = Product::findOrFail($data['product_id']);

    //     if ($order->quantity == $data['quantity']) {
    //         $product_new_quantity = 0;
    //     } else {

    //         if (($data['quantity'] - $order->quantity) > $product->quantity) {
    //             return back()->withInput()->withErrors(['quantity' => 'الكمية المدخلة اكبر من الموجوده في المخزن']);
    //         }
    //         $product_new_quantity = $data['quantity'] - $order->quantity;
    //         $data['profit'] = ($order->profit / $order->quantity) * $data['quantity'];
    //         $data['total_price'] = $order->price * $data['quantity'];
    //     }
    //     DB::beginTransaction();
    //     try {
    //         $order->update($data);

    //         if ($product_new_quantity != 0) {
    //             $product->update([
    //                 'quantity' => $product->quantity - $product_new_quantity,
    //                 'saled_quantity' => $product->saled_quantity + $product_new_quantity,
    //             ]);
    //         }
    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         return redirect()->route('orders.index')->with('fail', __('حدث خطأ، الرجاء المحاولة مره اخرى'));
    //     }
    //     //increase product saled quantity and decrease quantity

    //     return redirect()->route('orders.index')->with('success', __('تم التعديل بنجاح'));
    // }
}
