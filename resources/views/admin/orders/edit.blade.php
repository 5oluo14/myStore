@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $products = App\Models\Product::select('id', 'name')->pluck('name', 'id');
    $edit = false;
@endphp
@section('form')

{{ \App\Helper\Field::selectWithSearch(name: 'client_id', label: 'العملاء', required: 'true', placeholder: 'العملاء', options: $clients) }}
{{ \App\Helper\Field::selectWithSearch(name: 'product_id', label: 'المنتجات', required: 'true', placeholder: 'المنتجات', options: $products) }}
{{ \App\Helper\Field::number(name: 'quantity', label: 'الكمية', required: 'true', placeholder: 'الكمية' ,min: 1,value: $record->quantity) }}
@stop
