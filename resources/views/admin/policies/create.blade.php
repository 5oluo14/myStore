@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'title', label: 'title', required: 'true', placeholder: 'title') }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'true', placeholder: 'description') }}
@stop
