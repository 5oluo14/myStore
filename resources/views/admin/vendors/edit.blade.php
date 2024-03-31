@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'true', placeholder: 'الاسم', value: $record->name) }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', required: 'true', placeholder: 'البريد الالكتروني', value: $record->email) }}
    {{ \App\Helper\Field::text(name: 'phone', label: 'رقم الهاتف', required: 'true', placeholder: 'رقم الهاتف', value: $record->phone) }}
    {{ \App\Helper\Field::text(name: 'address', label: 'العنوان', required: 'true', placeholder: 'العنوان', value: $record->address) }}
@stop
