@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'filter[client_name]',
            'label' => 'name',
            'required' => 'false',
            'placeholder' => 'name',
        ],
        [
            'type' => 'number',
            'name' => 'filter[phone]',
            'label' => 'phone',
            'required' => 'false',
            'placeholder' => 'phone',
        ],
        [
            'type' => 'text',
            'name' => 'filter[address]',
            'label' => 'address',
            'required' => 'false',
            'placeholder' => 'address',
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'filter[client_id]',
            'label' => 'client',
            'required' => 'false',
            'placeholder' => 'client',
            'options' => $clients,
        ],
    ],
])
