@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name', 'id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name', 'id');
@endphp
@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'true', placeholder: 'الاسم', value: $record->name) }}
    {{ \App\Helper\Field::text(name: 'description', label: 'الوصف', required: 'true', placeholder: 'الوصف', value: $record->description) }}
    {{ \App\Helper\Field::number(name: 'price', label: 'السعر', required: 'true', placeholder: 'السعر', value: $record->price) }}
    {{ \App\Helper\Field::number(name: 'quantity', label: 'الكمية', required: 'true', placeholder: 'الكمية', value: $record->quantity) }}
    {{ \App\Helper\Field::selectWithSearch(name: 'category_id', label: 'القسم', required: 'true', placeholder: 'القسم', options: $categories) }}
    {{ \App\Helper\Field::selectWithSearch(name: 'vendor_id', label: 'المورد', required: 'true', placeholder: 'المورد', options: $vendors) }}
@stop
