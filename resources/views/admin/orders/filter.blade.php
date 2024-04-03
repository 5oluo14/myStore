@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $products = App\Models\Product::select('id', 'name')->pluck('name' ,'id',);
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'client',
            'label' => 'اسم العميل',
            'required' => 'false',
            'placeholder' => 'اسم العميل',
        ],
        [
            'type' => 'text',
            'name' => 'product',
            'label' => 'اسم المنتج',
            'required' => 'false',
            'placeholder' => 'اسم المنتج',
        ],
    ],
])
