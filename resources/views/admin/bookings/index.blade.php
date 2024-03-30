@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.bookings'),
])

@section('filter')
    @include('admin.bookings.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.code') }}</th>
            <th>{{ __('admin.recipient_name') }}</th>
            <th>{{ __('admin.car_info') }}</th>
            <th>{{ __('admin.postal_zip') }}</th>
            <th>{{ __('admin.phone_number') }}</th>
            <th>{{ __('admin.notes') }}</th>
            <th>{{ __('admin.status') }}</th>
            <th>{{ __('admin.pickup_date_and_time') }}</th>
            <th>{{ __('admin.service') }}</th>
            <th>{{ __('admin.prices_details') }}</th>
            <th>{{ __('admin.client') }}</th>
            <th>{{ __('admin.created_at') }}</th>
            <th>{{ __('admin.updated_at') }}</th>
            <th style="width: 1px">{{ __('admin.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->code }}</td>
                <td>{{ $record->recipient_name }}</td>
                <td>{{ $record->car_info }}</td>
                <td>{{ $record->postal_zip }}</td>
                <td>{{ $record->phone_number }}</td>
                <td>{{ $record->notes ?? __('admin.no_notes') }}</td>
                <td>
                    @include('admin.bookings.components.status-history', [
                        'record' => $record,
                    ])
                </td>
                <td>
                    <span class="badge bg-info">{{ $record->pickup_time }}</span>
                    <span class="badge bg-info">{{ $record->pickup_date }}</span>
                </td>
                <td>
                    @include('admin.bookings.components.booking-service', [
                        'record' => $record,
                    ])
                </td>
                <td>
                    <span class="badge bg-primary">{{ __('admin.quantity') . ' : ' . $record->service_quantity }}</span>
                    <span class="badge bg-primary">{{ __('admin.min_price') . ' : ' . $record->min_price }}</span>
                    <span class="badge bg-primary">{{ __('admin.max_price') . ' : ' . $record->max_price }}</span>
                    <span class="badge bg-primary">{{ __('admin.total_price') . ' : ' . $record->total_price }}</span>
                </td>
                <td>
                    <span class="badge bg-primary">{{ __('admin.name') . ' : ' . $record->client->name }}</span>
                    <span class="badge bg-primary">{{ __('admin.phone') . ' : ' . $record->client->phone }}</span>
                </td>
                <td>
                    <span class="badge bg-info">{{ $record->created_at?->format('Y-m-d H:i:s') }}</span>
                </td>
                <td>
                    <span class="badge bg-info">{{ $record->updated_at?->format('Y-m-d H:i:s') }}</span>
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
