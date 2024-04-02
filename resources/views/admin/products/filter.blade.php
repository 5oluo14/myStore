@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name', 'id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name', 'id');
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'الاسم',
            'required' => 'false',
            'placeholder' => 'الاسم',
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'category_id',
            'label' => 'القسم',
            'required' => 'false',
            'placeholder' => 'القسم',
            'options' => $categories,
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'vendor_id',
            'label' => 'المورد',
            'required' => 'false',
            'placeholder' => 'المورد',
            'options' => $vendors,
        ],
    ],
])
