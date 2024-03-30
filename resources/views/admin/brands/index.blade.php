@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.brands'),
])

@section('filter')
    @include('admin.brands.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.name_ar') }}</th>
            <th>{{ __('admin.name_en') }}</th>
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
                <td>
                    <div class="avatar avatar-lg me-3" data-bs-toggle="modal" data-bs-target="#image_{{ $record->id }}">
                        <img src="{{ $record->image_url }}" alt="Avatar" class="avatar-img">
                    </div>
                    <div class="modal fade text-left" id="image_{{ $record->id }}" tabindex="-1"
                        aria-labelledby="myModalLabel140" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h5 class="modal-title white" id="myModalLabel140"></h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ $record->image_url }}" style="max-height: 100%; max-width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td style="">
                    <div style="display:flex; gap:2px; justify-content:center;">
                         {{-- <a href="{{ route($show_route, $record->id) }}">
                            <button class="btn icon icon-left btn-primary me-2 text-nowrap"><i class="bi bi-eye-fill"></i></button>
                        </a> --}}
                        <a href="{{ route($edit_route, $record->id) }}">
                            <button class="btn icon icon-left btn-success me-2 text-nowrap"><i class="bi bi-pencil-square"></i></button>
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
