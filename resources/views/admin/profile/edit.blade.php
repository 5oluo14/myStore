@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', value: auth()->user()->name) }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', value: auth()->user()->email) }}
    {{ \App\Helper\Field::password(name: 'old_password', label: 'الرقم السري القديم', required: false, placeholder: 'الرقم السري القديم') }}
    {{ \App\Helper\Field::password(name: 'new_password', label: 'الرقم السري الجديد', required: false, placeholder: 'الرقم السري الجديد') }}
    {{ \App\Helper\Field::password(name: 'new_password_confirmation', label: 'تأكيد الرقم السري الجديد', required: false, placeholder: 'تأكيد الرقم السري الجديد') }}
@stop
