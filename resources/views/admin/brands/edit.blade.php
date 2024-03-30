@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name_ar', label: 'name_ar', required: 'false', placeholder: 'name_ar', value: $record->name_ar) }}
    {{ \App\Base\Helper\Field::text(name: 'name_en', label: 'name_en', required: 'false', placeholder: 'name_en', value: $record->name_en) }}
    {{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'false') }}
@stop
