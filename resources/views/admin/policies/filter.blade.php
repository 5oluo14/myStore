@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'filter[title]',
            'label' => 'title',
            'required' => 'false',
            'placeholder' => 'title',
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
