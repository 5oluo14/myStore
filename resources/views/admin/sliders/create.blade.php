@extends('admin.layouts.partials.crud-components.create-page')

@section('form')
{{ \App\Base\Helper\Field::fileWithPreview(name: 'image', label: 'image', required: 'true') }}
@stop
