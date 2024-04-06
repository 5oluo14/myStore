@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'false', placeholder: 'الاسم ') }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', required: 'false', placeholder: 'البريد الالكتروني') }}
    {{ \App\Helper\Field::password(name: 'password', label: 'كلمه المرور', required: 'false', placeholder: 'كلمه المرور') }}
    {{ \App\Helper\Field::password(name: 'password_confirmation', label: 'تأكيد كلمه المرور', required: 'false', placeholder: 'تأكيد كلمه المرور') }}
    {{ \App\Helper\Field::text(name: 'phone', label: 'رقم الموبيل', required: 'false', placeholder: 'رقم الموبيل ') }}
    {{ \App\Helper\Field::text(name: 'address', label: 'العنوان', required: 'false', placeholder: 'العنوان') }}
    {{ \App\Helper\Field::text(name: 'salary', label: 'المرتب', required: 'false', placeholder: 'المرتب') }}
    {{ \App\Helper\Field::text(name: 'work_hours', label: 'ساعات العمل', required: 'false', placeholder: 'ساعات العمل ') }}

@stop
