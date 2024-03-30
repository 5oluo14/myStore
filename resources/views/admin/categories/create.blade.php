@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'true', placeholder: 'name') }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'true', placeholder: 'description') }}
    {{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'true') }}
@stop
