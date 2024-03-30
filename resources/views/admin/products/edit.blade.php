@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name','id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name','id');
@endphp
@section('form')
{{ \App\Base\Helper\Field::text(name: 'code', label: 'code', required: 'true', placeholder: 'code', value: $record->code) }}
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'true', placeholder: 'name', value: $record->name) }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'true', placeholder: 'description', value: $record->description) }}
    {{ \App\Base\Helper\Field::number(name: 'price_before_discount', label: 'price_before_discount', required: 'true', placeholder: 'price_before_discount', value: $record->price_before_discount) }}
    {{ \App\Base\Helper\Field::number(name: 'price_after_discount', label: 'price_after_discount', required: 'true', placeholder: 'price_after_discount', value: $record->price_after_discount) }}
    {{ \App\Base\Helper\Field::number(name: 'price_cost', label: 'price_cost', required: 'true', placeholder: 'price_cost', value: $record->price_cost) }}
    {{ \App\Base\Helper\Field::number(name: 'profit_price', label: 'profit_price', required: 'true', placeholder: 'profit_price', value: $record->profit_price) }}
    {{ \App\Base\Helper\Field::radio(name: 'status', label: 'status', options: [0 => 'inactive', 1 => 'active'], checked: $record->status) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'category_id', label: 'category', required: 'true', placeholder: 'category', options: $categories, selected: $record->category_id) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'vendor_id', label: 'vendor', required: 'true', placeholder: 'vendor', options: $vendors, selected: $record->vendor_id) }}
    {{ \App\Base\Helper\Field::multiFileUpload(name: 'media', label: 'image', required: 'true') }}
@stop
