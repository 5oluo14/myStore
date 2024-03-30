@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $brands = App\Models\Brand::select('id', 'name_' . app()->getLocale())->pluck('name_' . app()->getLocale(), 'id');
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'number',
            'name' => 'filter[plate_number]',
            'label' => 'plate_number',
            'required' => 'false',
            'placeholder' => 'plate_number',
        ],
        [
            'type' => 'text',
            'name' => 'filter[model]',
            'label' => 'model',
            'required' => 'false',
            'placeholder' => 'model',
        ],
        [
            'type' => 'text',
            'name' => 'filter[plate_source]',
            'label' => 'plate_source',
            'required' => 'false',
            'placeholder' => 'plate_source',
        ],
        [
            'type' => 'number',
            'name' => 'filter[year]',
            'label' => 'year',
            'required' => 'false',
            'placeholder' => 'year',
        ],
        [
            'type' => 'text',
            'name' => 'filter[plate_code]',
            'label' => 'plate_code',
            'required' => 'false',
            'placeholder' => 'plate_code',
        ],
        [
            'type' => 'text',
            'name' => 'filter[color]',
            'label' => 'color',
            'required' => 'false',
            'placeholder' => 'color',
        ],
        [
            'type' => 'text',
            'name' => 'filter[client_name]',
            'label' => 'client_name',
            'required' => 'false',
            'placeholder' => 'client_name',
        ],
        [
            'type' => 'text',
            'name' => 'filter[client_phone]',
            'label' => 'client_phone',
            'required' => 'false',
            'placeholder' => 'client_phone',
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'filter[client_id]',
            'label' => 'client',
            'required' => 'false',
            'placeholder' => 'client',
            'options' => $clients,
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'filter[brand_id]',
            'label' => 'brand',
            'required' => 'false',
            'placeholder' => 'brand',
            'options' => $brands,
        ],
    ],
])
