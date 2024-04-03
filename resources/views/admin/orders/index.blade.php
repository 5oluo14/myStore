@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('عمليات البيع'),
])

@section('filter')
    @include('admin.orders.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
@if (!empty($records) && count($records) > 0)

    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('اسم العميل') }}</th>
            <th>{{ __('اسم المنتج') }}</th>
            <th>{{ __('الكميه') }}</th>
            <th>{{ __('سعر المنتج') }}</th>
            <th>{{ __('الربح') }}</th>
            <th>{{ __('الاجمالي') }}</th>
            <th>{{ __('تاريخ الانشاء') }}</th>
            <th style="width: 1px">{{ __('الاجراءات') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record?->client?->name }}</td>
                <td>{{ $record?->product?->name }}</td>
                <td>{{ $record->quantity }}</td>
                <td>{{ $record->price }}</td>
                <td>{{ $record->profit }}</td>
                <td>{{ $record->total_price }}</td>
                <td>
                    <span class="badge bg-info">{{ $record->created_at?->format('Y-m-d H:i:s') }}</span>
                </td>
                <td style="">
                    <div style="display:flex; gap:2px; justify-content:center;">
                        <a href="{{ route($edit_route, $record->id) }}">
                            <button class="btn icon icon-left btn-success me-2 text-nowrap"><i
                                    class="bi bi-pencil-square"></i></button>
                        </a>
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
