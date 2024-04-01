@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'false', placeholder: 'الاسم') }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', required: 'true', placeholder: 'البريد الالكتروني') }}
    {{ \App\Helper\Field::number(name: 'phone', label: 'رقم الهاتف', required: 'false', placeholder: 'رقم الهاتف') }}
    {{ \App\Helper\Field::text(name: 'address', label: 'العنوان', required: 'false', placeholder: 'العنوان') }}
@stop
