@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.services'),
])

@section('filter')
    @include('admin.services.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.name_ar') }}</th>
            <th>{{ __('admin.name_en') }}</th>
            <th>{{ __('admin.description_ar') }}</th>
            <th>{{ __('admin.description_en') }}</th>
            <th>{{ __('admin.status') }}</th>
            <th>{{ __('admin.min_price') }}</th>
            <th>{{ __('admin.max_price') }}</th>
            <th>{{ __('admin.category') }}</th>
            <th>{{ __('admin.image') }}</th>
            <th style="width: 1px">{{ __('admin.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->name_ar }}</td>
                <td>{{ $record->name_en }}</td>
                <td>{{ $record->description_ar }}</td>
                <td>{{ $record->description_en }}</td>
                <td> {!! \App\Base\Helper\Field::toggleBooleanView(
                    name: 'status',
                    label: 'status',
                    model: $record,
                    url: route('admin.services.toggleBoolean', ['id' => $record->id, 'action' => 'status']),
                ) !!}
                <td>{{ $record->min_price }}</td>
                <td>{{ $record->max_price }}</td>
                <td>{{ $record->category->getLocaleAttribute('name') }}</td>
                <td>
                    @include('admin.layouts.partials.components.custom.gallery-component', [
                        'images' => $record->getMedia(),
                        'gallery_name' => 'serivce_gallery',
                    ])
                </td>
                <td style="">
                    <div style="display:flex; gap:2px; justify-content:center;">
                        {{-- <a href="{{ route($show_route, $record->id) }}">
                            <button class="btn icon icon-left btn-primary me-2 text-nowrap"><i class="bi bi-eye-fill"></i></button>
                        </a> --}}
                        <a href="{{ route($edit_route, $record->id) }}">
                            <button class="btn icon icon-left btn-success me-2 text-nowrap"><i
                                    class="bi bi-pencil-square"></i></button>
                        </a>
                        <button id="{{ $record->id }}" data-token="{{ csrf_token() }}"
                            data-route="{{ route($destroy_route, $record->id) }}" type="button"
                            class="btn icon icon-left btn-danger me-2 text-nowrap destroy">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>

@stop
