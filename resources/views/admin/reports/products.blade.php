@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('تقرير ارصده المنتجات'),
])

@section('filter')
    @include('admin.reports.filter', [
        'create_route' => null,
    ])
@stop

@section('table')
    @if (!empty($records) && count($records) > 0)

        <thead>
            <tr>
                <th>{{ __('#') }}</th>
                <th>{{ __('الاسم') }}</th>
                <th>{{ __('الكمية المتاحة') }}</th>
                <th>{{ __('الكمية المباعة') }}</th>
                <th>{{ __('الحد الادنى من الكمية') }}</th>
                <th>{{ __('تاريخ الانشاء') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr id="removable{{ $record->id }}">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->quantity }}</td>
                    <td>{{ $record->saled_quantity }}</td>
                    <td>{{ $record->min_quantity }}</td>
                    <td>{{ $record->created_at?->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    @else
        <div>
            <h3 class="page-heading pt-5" style="text-align: center"> لا توجد بيانات للعرض !!</h3>
        </div>
    @endif


@stop
