@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'true', placeholder: 'الاسم', value: $record->name) }}
@stop