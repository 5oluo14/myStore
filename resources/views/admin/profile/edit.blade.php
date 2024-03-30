@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', value: auth()->user()->name) }}
    {{ \App\Base\Helper\Field::email(name: 'email', label: 'email', value: auth()->user()->email) }}
    {{ \App\Base\Helper\Field::number(name: 'phone', label: 'phone', value: auth()->user()->phone) }}
    {{ \App\Base\Helper\Field::password(name: 'old_password', label: 'old_password', required: false, placeholder: 'old_password') }}
    {{ \App\Base\Helper\Field::password(name: 'new_password', label: 'new_password', required: false, placeholder: 'new_password') }}
    {{ \App\Base\Helper\Field::password(name: 'new_password_confirmation', label: 'new_password_confirmation', required: false, placeholder: 'new_password_confirmation') }}
@stop
