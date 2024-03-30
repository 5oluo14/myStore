@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'false', placeholder: 'name') }}
    {{ \App\Base\Helper\Field::number(name: 'phone', label: 'phone', required: 'false', placeholder: 'phone') }}
    {{ \App\Base\Helper\Field::password(name: 'password', label: 'password', required: 'false', placeholder: 'password') }}
@stop
