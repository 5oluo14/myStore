@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'true', placeholder: 'الاسم') }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', required: 'true', placeholder: 'البريد الالكتروني') }}
    {{ \App\Helper\Field::text(name: 'phone', label: 'رقم الهاتف', required: 'true', placeholder: 'رقم الهاتف') }}
    {{ \App\Helper\Field::text(name: 'address', label: 'العنوان', required: 'true', placeholder: 'العنوان') }}
@stop
