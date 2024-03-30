@extends('admin.layouts.partials.crud-components.create-page')
@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
@endphp

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'client_name', label: 'client_name', required: 'false', placeholder: 'client_name') }}
    {{ \App\Base\Helper\Field::number(name: 'phone', label: 'phone', required: 'false', placeholder: 'phone') }}
    {{ \App\Base\Helper\Field::text(name: 'address', label: 'address', required: 'false', placeholder: 'address') }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'client_id', label: 'client', required: 'true', placeholder: 'client', options: $clients) }}
@stop
