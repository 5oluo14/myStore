@extends('admin.layouts.partials.crud-components.create-page')

@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $brands = App\Models\Brand::select('id', 'name_' . app()->getLocale())->pluck(
        'name_' . app()->getLocale(),
        'id',
    );
@endphp

@section('form')
    {{ \App\Base\Helper\Field::number(name: 'plate_number', label: 'plate_number', required: 'true', placeholder: 'plate_number') }}
    {{ \App\Base\Helper\Field::text(name: 'model', label: 'model', required: 'true', placeholder: 'model') }}
    {{ \App\Base\Helper\Field::text(name: 'plate_source', label: 'plate_source', required: 'true', placeholder: 'plate_source') }}
    {{ \App\Base\Helper\Field::text(name: 'year', label: 'year', required: 'true', placeholder: 'year') }}
    {{ \App\Base\Helper\Field::text(name: 'plate_code', label: 'plate_code', required: 'true', placeholder: 'plate_code') }}
    {{ \App\Base\Helper\Field::text(name: 'color', label: 'color', required: 'true', placeholder: 'color') }}
    {{ \App\Base\Helper\Field::text(name: 'client_name', label: 'client_name', required: 'true', placeholder: 'client_name') }}
    {{ \App\Base\Helper\Field::number(name: 'client_phone', label: 'client_phone', required: 'true', placeholder: 'client_phone') }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'brand_id', label: 'brand', required: 'true', placeholder: 'brand', options: $brands) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'client_id', label: 'client', required: 'true', placeholder: 'client', options: $clients) }}
    {{ \App\Base\Helper\Field::multiFileUpload(name: 'media', label: 'media', required: 'false') }}
@stop
