@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'true', placeholder: 'name') }}
@stop
