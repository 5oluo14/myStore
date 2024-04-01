@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'vendor',
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
        [
            'type' => 'number',
            'name' => 'phone',
            'label' => 'رقم الهاتف',
            'required' => 'false',
            'placeholder' => 'رقم الهاتف',
        ],
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'العنوان',
            'required' => 'false',
            'placeholder' => 'العنوان',
        ],
    ],
])
