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
        [
            'type' => 'number',
            'name' => 'phone',
            'label' => 'رقم الموبيل',
            'required' => 'false',
            'placeholder' => 'رقم الموبيل',
        ],
        [
            'type' => 'text',
            'name' => 'address',
            'label' => 'العنوان',
            'required' => 'false',
            'placeholder' => 'العنوان',
        ],
        [
            'type' => 'text',
            'name' => 'salary',
            'label' => 'المرتب',
            'required' => 'false',
            'placeholder' => 'المرتب',
        ],
        [
            'type' => 'text',
            'name' => 'work_hours',
            'label' => 'ساعات العمل',
            'required' => 'false',
            'placeholder' => 'ساعات العمل',
        ],
    ]
])
