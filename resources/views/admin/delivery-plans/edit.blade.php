@extends('admin.layouts.partials.crud-components.edit-page')

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name_ar', label: 'name_ar', required: 'false', placeholder: 'name_ar', value: $record->name_ar) }}
    {{ \App\Base\Helper\Field::text(name: 'name_en', label: 'name_en', required: 'false', placeholder: 'name_en', value: $record->name_en) }}
    {{ \App\Base\Helper\Field::text(name: 'description_ar', label: 'description_ar', required: 'false', placeholder: 'description_ar', value: $record->description_ar) }}
    {{ \App\Base\Helper\Field::text(name: 'description_en', label: 'description_en', required: 'false', placeholder: 'description_en', value: $record->description_en) }}
    {{ \App\Base\Helper\Field::number(name: 'price', label: 'price', required: 'false', placeholder: 'price', value: $record->price) }}
@stop
