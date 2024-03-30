@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'title', label: 'title', required: 'false', placeholder: 'title', value: $record->title) }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'false', placeholder: 'description', value: $record->description) }}
@stop
