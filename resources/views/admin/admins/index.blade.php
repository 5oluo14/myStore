@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.admins'),
])

@section('filter')
    @include('admin.admins.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.name') }}</th>
            <th>{{ __('admin.email') }}</th>
            <th>{{ __('admin.phone') }}</th>
            <th>{{ __('admin.status') }}</th>
            <th>{{ __('admin.created_at') }}</th>
            <th>{{ __('admin.updated_at') }}</th>
            <th style="width: 1px">{{ __('admin.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td> {!! \App\Base\Helper\Field::toggleBooleanView(
                    name: 'status',
                    label: 'status',
                    model: $record,
                    url: route('admin.admins.toggleBoolean', ['id' => $record->id, 'action' => 'status']),
                ) !!}
                </td>
                <td>{{ $record->created_at?->format('Y-m-d H:i:s') }}</td>
                <td>{{ $record->updated_at?->format('Y-m-d H:i:s') }}</td>
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
