@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.orders'),
])

@section('filter')
    @include('admin.orders.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.code') }}</th>
            <th>{{ __('admin.status') }}</th>
            <th>{{ __('admin.total_price') }}</th>
            <th>{{ __('admin.delivery_plan') }}</th>
            <th>{{ __('admin.products') }}</th>
            <th>{{ __('admin.client') }}</th>
            <th>{{ __('admin.client_address') }}</th>
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
                <td>
                    @include('admin.orders.components.status-history', [
                        'record' => $record,
                    ])
                </td>
                <td>{{ $record->total_price }}</td>
                <td>{{ $record->deliveryPlan->getLocaleAttribute('name') }}</td>
                <td>
                    @include('admin.orders.components.order-products', [
                        'record' => $record,
                    ])
                </td>
                <td>
                    <span class="badge bg-primary">{{ __('admin.name') . ' : ' . $record->client->name }}</span>
                    <span class="badge bg-primary">{{ __('admin.phone') . ' : ' . $record->client->phone }}</span>
                </td>
                <td>
                    <span
                        class="badge bg-primary">{{ __('admin.name') . ' : ' . $record->clientAddress->client_name }}</span>
                    <span class="badge bg-primary">{{ __('admin.phone') . ' : ' . $record->clientAddress->phone }}</span>
                    <span
                        class="badge bg-primary">{{ __('admin.address') . ' : ' . $record->clientAddress->address }}</span>
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
