@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.products'),
])

@section('filter')
    @include('admin.products.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.code') }}</th>
            <th>{{ __('admin.name') }}</th>
            <th>{{ __('admin.description') }}</th>
            <th>{{ __('admin.category') }}</th>
            <th>{{ __('admin.vendor') }}</th>
            <th>{{ __('admin.price_before_discount') }}</th>
            <th>{{ __('admin.price_after_discount') }}</th>
            <th>{{ __('admin.price_cost') }}</th>
            <th>{{ __('admin.profit_price') }}</th>
            <th>{{ __('admin.quntity') }}</th>
            <th>{{ __('admin.status') }}</th>
            <th>{{ __('admin.images') }}</th>
            <th style="width: 1px">{{ __('admin.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->code }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->description }}</td>
                <td>{{ $record->category->name }}</td>
                <td>{{ $record->vendor->name }}</td>
                <td>{{ $record->price_before_discount }}</td>
                <td>{{ $record->price_after_discount }}</td>
                <td>{{ $record->price_cost }}</td>
                <td>{{ $record->profit_price }}</td>
                <td>{{ $record->quntity }}</td>
                <td>{{ $record->status }}</td>
                <td>
                    @include('admin.layouts.partials.components.custom.gallery-component', [
                        'images' => $record->getMedia(),
                        'gallery_name' => 'serivce_gallery',
                        'record' => $record,
                    ])
                </td>
                <td style="">
                    <div style="display:flex; gap:2px; justify-content:center;">
                        {{-- <a href="{{ route($show_route, $record->id) }}">
                            <button class="btn icon icon-left btn-primary me-2 text-nowrap"><i
                                    class="bi bi-eye-fill"></i></button>
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
