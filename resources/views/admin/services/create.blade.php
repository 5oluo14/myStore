@extends('admin.layouts.partials.crud-components.create-page')
@php
    $categories = App\Models\Category::select('id', 'name_' . app()->getLocale())->pluck(
        'name_' . app()->getLocale(),
        'id',
    );
@endphp
@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name_ar', label: 'name_ar', required: 'true', placeholder: 'name_ar') }}
    {{ \App\Base\Helper\Field::text(name: 'name_en', label: 'name_en', required: 'true', placeholder: 'name_en') }}
    {{ \App\Base\Helper\Field::text(name: 'description_ar', label: 'description_ar', required: 'true', placeholder: 'description_ar') }}
    {{ \App\Base\Helper\Field::text(name: 'description_en', label: 'description_en', required: 'true', placeholder: 'description_en') }}
    {{ \App\Base\Helper\Field::number(name: 'min_price', label: 'min_price', required: 'true', placeholder: 'min_price') }}
    {{ \App\Base\Helper\Field::number(name: 'max_price', label: 'max_price', required: 'true', placeholder: 'max_price') }}
    {{ \App\Base\Helper\Field::radio(name: 'status', label: 'status', options: [0 => 'inactive', 1 => 'active']) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'category_id', label: 'category', required: 'true', placeholder: 'category', options: $categories) }}
    {{ \App\Base\Helper\Field::multiFileUpload(name: 'media', label: 'image', required: 'true') }}
@stop
