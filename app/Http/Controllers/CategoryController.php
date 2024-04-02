<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $records = Category::when(request('category'), function ($q) {
            $q->where('name', 'like', '%' . request('Category') . '%');
        })
            ->when(request('from_date'), function ($q) {
                $q->where('created_at', '>=', request('from_date'))
                    ->where('created_at', '<=', request('to_date'));
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        $edit_route = 'categories.edit';
        $create_route = 'categories.create';
        $destroy_route = 'categories.destroy';
        return view('admin.categories.index', compact('records', 'create_route', 'edit_route', 'destroy_route'));
    }

    public function create()
    {
        $store_route = 'categories.store';
        return view('admin.categories.create', compact('store_route'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $category = Category::create($data);
        return redirect()->route('categories.index')->with('success', __('تم الاضافة بنجاح'));

    }

    public function edit($id)
    {
        $record = Category::findOrFail($id);
        $update_route = 'categories.update';
        return view('admin.categories.edit', compact('update_route', 'record'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('categories.index')->with('success', __('تم التعديل بنجاح'));
    }

    public function destroy(Category $category)
    {
        $id = $category->id;
        $category->delete();
        return response()->json([
            'status' => 1,
            'message' => __('تم الحذف بنجاح'),
            'id' => $id
        ]);
    }
}
