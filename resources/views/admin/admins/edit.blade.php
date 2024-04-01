@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', value: $record->name) }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', value: $record->email) }}
@stop
