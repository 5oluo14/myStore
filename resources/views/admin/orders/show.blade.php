@extends('admin.layouts.partials.crud-components.show-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'code', label: 'code', required: 'false', placeholder: 'code', value: $record->code, disabled: true) }}
    {{ \App\Base\Helper\Field::text(name: 'notes', label: 'notes', required: 'false', placeholder: 'notes', value: $record->notes, disabled: true) }}
    {{ \App\Base\Helper\Field::text(name: 'status', label: 'status', required: 'false', placeholder: 'status', value: $record->status, disabled: true) }}
    {{ \App\Base\Helper\Field::text(name: 'total_price', label: 'total_price', required: 'false', placeholder: 'total_price', value: $record->total_price, disabled: true) }}
    {{ \App\Base\Helper\Field::text(name: 'delivery_plan', label: 'delivery_plan', required: 'false', placeholder: 'delivery_plan', value: $record->deliveryPlan->getLocaleAttribute('name'), disabled: true) }}
@stop
