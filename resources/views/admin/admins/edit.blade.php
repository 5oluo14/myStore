@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', value: $record->name) }}
    {{ \App\Helper\Field::email(name: 'email', label: 'البريد الالكتروني', value: $record->email) }}
    {{ \App\Helper\Field::string(name: 'phone', label: 'رقم الموبيل', value: $record->phone) }}
    {{ \App\Helper\Field::string(name: 'address', label: 'العنوان', value: $record->address) }}
    {{ \App\Helper\Field::float(name: 'salary', label: 'المرتب', value: $record->salary) }}
    {{ \App\Helper\Field::float(name: 'work_hours', label: 'ساعات العمل', value: $record->work_hours) }}
@stop
