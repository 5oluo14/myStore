@php
    $status = App\Enums\OrderStatus::keysAndValues();
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $delivery_plans = App\Models\DeliveryPlan::select('id', 'name_' . app()->getLocale())->pluck(
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
            'name' => 'filter[notes]',
            'label' => 'notes',
            'required' => 'false',
            'placeholder' => 'notes',
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
            'name' => 'filter[delivey_plan_id]',
            'label' => 'delivery_plan',
            'required' => 'false',
            'placeholder' => 'delivery_plan',
            'options' => $delivery_plans,
        ],
    ],
])
