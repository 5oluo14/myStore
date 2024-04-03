@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => null,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'product',
            'label' => 'اسم المنتج',
            'required' => 'false',
            'placeholder' => 'اسم المنتج',
        ],
    ],
])
