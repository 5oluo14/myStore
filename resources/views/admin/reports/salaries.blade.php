@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => 'المدفوعات',
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
                <th>{{ __('المرتب') }}</th>
                <th>{{ __('تاريخ الانشاء') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr id="removable{{ $record->id }}">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->user->name }}</td>
                    <td>{{ $record->amount }}</td>
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
