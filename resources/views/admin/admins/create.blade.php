@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'false', placeholder: 'name') }}
    {{ \App\Base\Helper\Field::email(name: 'email', label: 'email', required: 'false', placeholder: 'email') }}
    {{ \App\Base\Helper\Field::number(name: 'phone', label: 'phone', required: 'false', placeholder: 'phone') }}
    {{ \App\Base\Helper\Field::password(name: 'password', label: 'password', required: 'false', placeholder: 'password') }}
    {{ \App\Base\Helper\Field::radio(name: 'status', label: 'status', options: [0 => 'inactive', 1 => 'active']) }}
@stop
