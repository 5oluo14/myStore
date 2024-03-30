@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $brands = App\Models\Brand::select('id', 'name_' . app()->getLocale())->pluck('name_' . app()->getLocale(), 'id');
@endphp
@section('form')
    {{ \App\Base\Helper\Field::number(name: 'plate_number', label: 'plate_number', required: 'true', placeholder: 'plate_number', value: $record->plate_number) }}
    {{ \App\Base\Helper\Field::text(name: 'model', label: 'model', required: 'true', placeholder: 'model', value: $record->model) }}
    {{ \App\Base\Helper\Field::text(name: 'plate_source', label: 'plate_source', required: 'true', placeholder: 'plate_source', value: $record->plate_source) }}
    {{ \App\Base\Helper\Field::text(name: 'year', label: 'year', required: 'true', placeholder: 'year', value: $record->year) }}
    {{ \App\Base\Helper\Field::text(name: 'plate_code', label: 'plate_code', required: 'true', placeholder: 'plate_code', value: $record->plate_code) }}
    {{ \App\Base\Helper\Field::text(name: 'color', label: 'color', required: 'true', placeholder: 'color', value: $record->color) }}
    {{ \App\Base\Helper\Field::text(name: 'client_name', label: 'client_name', required: 'true', placeholder: 'client_name', value: $record->client_name) }}
    {{ \App\Base\Helper\Field::number(name: 'client_phone', label: 'client_phone', required: 'true', placeholder: 'client_phone', value: $record->client_phone) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'brand_id', label: 'brand', required: 'true', placeholder: 'brand', options: $brands, selected: $record->brand_id) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'client_id', label: 'client', required: 'true', placeholder: 'client', options: $clients, selected: $record->client_id) }}
    {{ \App\Base\Helper\Field::multiFileUpload(name: 'media', label: 'media', required: 'false') }}
@stop
