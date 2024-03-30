@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'false', path: $record->image_url) }}
@stop
