@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
    {{ \App\Helper\Field::text(name: 'name', label: 'الاسم', required: 'false', placeholder: 'الاسم') }}
@stop
