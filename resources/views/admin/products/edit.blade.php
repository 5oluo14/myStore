@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name', 'id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name', 'id');
@endphp
@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'true', placeholder: 'الاسم', value: $record->name) }}
    {{ \App\Helper\Field::text(name: 'description', label: 'الوصف', required: 'true', placeholder: 'الوصف', value: $record->description) }}
    {{ \App\Helper\Field::number(name: 'buying_price', label: 'سعر الشراء', required: 'true', placeholder: 'سعر الشراء', value: $record->buying_price) }}
    {{ \App\Helper\Field::number(name: 'sellind_price', label: 'سعر البيع', required: 'true', placeholder: 'سعر البيع', value: $record->selling_price) }}
    {{ \App\Helper\Field::number(name: 'quantity', label: 'الكمية', required: 'true', placeholder: 'الكمية', value: $record->quantity, disabled: true) }}
    {{ \App\Helper\Field::number(name: 'min_quantity', label: 'الحد الادنى من الكمية', required: 'true', placeholder: 'الحد الادنى من الكمية') }}
    {{ \App\Helper\Field::selectWithSearch(name: 'category_id', label: 'القسم', required: 'true', placeholder: 'القسم', options: $categories) }}
    {{ \App\Helper\Field::selectWithSearch(name: 'vendor_id', label: 'المورد', required: 'true', placeholder: 'المورد', options: $vendors) }}
@stop
