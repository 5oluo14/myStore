@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('العملاء'),
])

@section('filter')
    @include('admin.clients.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
 @if (!empty($records) && count($records) > 0)
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('الاسم') }}</th>
            <th>{{ __('البريد الالكتروني') }}</th>
            <th>{{ __('رقم الهاتف') }}</th>
            <th>{{ __('العنوان') }}</th>
            <th style="width: 1px">{{ __('الاجراءت') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td>{{ $record->address }}</td>
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
    @else
        <div>
            <h3 class="page-heading pt-5" style="text-align: center"> لا توجد بيانات للعرض !!</h3>
        </div>
    @endif


@stop
