@php
    $status = App\Enums\BookingStatus::keysAndValues();
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $services = App\Models\Service::select('id', 'name_' . app()->getLocale())->pluck(
        'name_' . app()->getLocale(),
        'id',
    );
@endphp

@include('admin.layouts.partials.crud-components.filter', [
    'create_route' => $create_route,
    'filters' => [
        [
            'type' => 'text',
            'name' => 'filter[code]',
            'label' => 'code',
            'required' => 'false',
            'placeholder' => 'code',
        ],
        [
            'type' => 'text',
            'name' => 'filter[recipient_name]',
            'label' => 'recipient_name',
            'required' => 'false',
            'placeholder' => 'recipient_name',
        ],
        [
            'type' => 'text',
            'name' => 'filter[car_info]',
            'label' => 'car_info',
            'required' => 'false',
            'placeholder' => 'car_info',
        ],
        [
            'type' => 'text',
            'name' => 'filter[postal_zip]',
            'label' => 'postal_zip',
            'required' => 'false',
            'placeholder' => 'postal_zip',
        ],
        [
            'type' => 'text',
            'name' => 'filter[phone_number]',
            'label' => 'phone_number',
            'required' => 'false',
            'placeholder' => 'phone_number',
        ],
        [
            'type' => 'text',
            'name' => 'filter[notes]',
            'label' => 'notes',
            'required' => 'false',
            'placeholder' => 'notes',
        ],
        [
            'type' => 'date',
            'name' => 'filter[pickup_date]',
            'label' => 'pickup_date',
            'required' => 'false',
            'placeholder' => 'pickup_date',
        ],
        [
            'type' => 'time',
            'name' => 'filter[pickup_time]',
            'label' => 'pickup_time',
            'required' => 'false',
            'placeholder' => 'pickup_time',
        ],
        [
            'type' => 'number',
            'name' => 'filter[min_price]',
            'label' => 'min_price',
            'required' => 'false',
            'placeholder' => 'min_price',
        ],
        [
            'type' => 'number',
            'name' => 'filter[max_price]',
            'label' => 'max_price',
            'required' => 'false',
            'placeholder' => 'max_price',
        ],
        [
            'type' => 'number',
            'name' => 'filter[total_price]',
            'label' => 'total_price',
            'required' => 'false',
            'placeholder' => 'total_price',
        ],
        [
            'type' => 'selectWithSearch',
            'name' => 'filter[status]',
            'label' => 'status',
            'required' => 'false',
            'placeholder' => 'status',
            'options' => $status,
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
            'name' => 'filter[service_id]',
            'label' => 'service',
            'required' => 'false',
            'placeholder' => 'service',
            'options' => $services,
        ],
    ],
])
