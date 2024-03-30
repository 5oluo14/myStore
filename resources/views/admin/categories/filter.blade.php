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
    ],
])
