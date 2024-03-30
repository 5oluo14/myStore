@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'filter[name_ar]',
            'label' => 'name_ar',
            'required' => 'false',
            'placeholder' => 'name_ar',
        ],
        [
            'type' => 'text',
            'name' => 'filter[name_en]',
            'label' => 'name_en',
            'required' => 'false',
            'placeholder' => 'name_en',
        ],
    ],
])
