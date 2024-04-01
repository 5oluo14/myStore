@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'admin',
            'label' => 'الاسم',
            'required' => 'false',
            'placeholder' => 'الاسم',
        ],
        [
            'type' => 'email',
            'name' => 'email',
            'label' => 'البريد الالكتروني',
            'required' => 'false',
            'placeholder' => 'البريد الالكتروني',
        ],

    ],
])
