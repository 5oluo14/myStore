@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'false', placeholder: 'الاسم ') }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', required: 'false', placeholder: 'البريد الالكتروني') }}
    {{ \App\Helper\Field::password(name: 'password', label: 'كلمه المرور', required: 'false', placeholder: 'كلمه المرور') }}
    {{ \App\Helper\Field::password(name: 'password_confirmation', label: 'تأكيد كلمه المرور', required: 'false', placeholder: 'تأكيد كلمه المرور') }}
@stop
