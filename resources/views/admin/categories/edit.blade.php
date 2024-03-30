@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'false', placeholder: 'name', value: $record->name) }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'false', placeholder: 'description', value: $record->description) }}
    {{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'false', path: $record->image_url) }}
@stop
