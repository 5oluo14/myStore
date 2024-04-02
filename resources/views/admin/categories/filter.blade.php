@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'category',
            'label' => 'الاسم',
            'required' => 'false',
            'placeholder' => 'الاسم',
        ],



        ]
])
