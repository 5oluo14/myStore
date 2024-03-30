@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name','id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name','id');
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'filter[name]',
            'label' => 'name',
            'required' => 'false',
            'placeholder' => 'name',
        ],
        [
            'type' => 'text',
            'name' => 'filter[description]',
            'label' => 'description',
            'required' => 'false',
            'placeholder' => 'description',
        ],
        [
            'type' => 'number',
            'name' => 'filter[price_before_discount]',
            'label' => 'price_before_discount',
            'required' => 'false',
            'placeholder' => 'price_before_discount',
        ],
        [
            'type' => 'number',
            'name' => 'filter[price_after_discount]',
            'label' => 'price_after_discount',
            'required' => 'false',
            'placeholder' => 'price_after_discount',
        ],
        [
            'type' => 'number',
            'name' => 'filter[price_cost]',
            'label' => 'price_cost',
            'required' => 'false',
            'placeholder' => 'price_cost',
        ],
                [
            'type' => 'number',
            'name' => 'filter[profit_price]',
            'label' => 'profit_price',
            'required' => 'false',
            'placeholder' => 'profit_price',
        ],
        [
            'type' => 'number',
            'name' => 'filter[quntity]',
            'label' => 'quntity',
            'required' => 'false',
            'placeholder' => 'quntity',
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'filter[category_id]',
            'label' => 'category',
            'required' => 'false',
            'placeholder' => 'category',
            'options' => $categories,
        ],
                [
            'type' => 'selectWithSearch',
            'name' => 'filter[vendor_id]',
            'label' => 'vendor',
            'required' => 'false',
            'placeholder' => 'vendor',
            'options' => $vendors,
        ],
    ],
])
