@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name_ar', label: 'name_ar', required: 'true', placeholder: 'name_ar') }}
    {{ \App\Base\Helper\Field::text(name: 'name_en', label: 'name_en', required: 'true', placeholder: 'name_en') }}
    {{ \App\Base\Helper\Field::text(name: 'description_ar', label: 'description_ar', required: 'true', placeholder: 'description_ar') }}
    {{ \App\Base\Helper\Field::text(name: 'description_en', label: 'description_en', required: 'true', placeholder: 'description_en') }}
    {{ \App\Base\Helper\Field::number(name: 'price', label: 'price', required: 'false', placeholder: 'price') }}

@stop
