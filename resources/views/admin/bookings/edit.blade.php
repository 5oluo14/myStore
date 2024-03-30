@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $status = App\Enums\BookingStatus::keysAndValues();
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $delivery_plans = App\Models\DeliveryPlan::select('id', 'name_' . app()->getLocale())->pluck(
        'name_' . app()->getLocale(),
        'id',
    );
@endphp


@section('form')
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'status', label: 'status', required: 'true', placeholder: 'status', options: $status, selected: $record->status) }}
    {{-- {{ \App\Base\Helper\Field::selectWithSearch(name: 'client_id', label: 'client', required: 'true', placeholder: 'client', options: $clients, selected: $record->client_id) }} --}}
    {{-- {{ \App\Base\Helper\Field::selectWithSearch(name: 'delivery_plan_id', label: 'delivery_plan', required: 'true', placeholder: 'delivery_plan', options: $delivery_plans, selected: $record->delivery_plan_id) }} --}}
@stop
