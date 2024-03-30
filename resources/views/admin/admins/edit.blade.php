@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', value: $record->name) }}
    {{ \App\Base\Helper\Field::email(name: 'email', label: 'email', value: $record->email) }}
    {{ \App\Base\Helper\Field::number(name: 'phone', label: 'phone', value: $record->phone) }}
    {{ \App\Base\Helper\Field::radio(name: 'status', label: 'status', options: [0 => 'inactive', 1 => 'active'], checked: $record->status) }}
@stop
