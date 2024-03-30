@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name_ar', label: 'name_ar', required: 'true', placeholder: 'name_ar') }}
    {{ \App\Base\Helper\Field::text(name: 'name_en', label: 'name_en', required: 'true', placeholder: 'name_en') }}
    {{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'true') }}
@stop
