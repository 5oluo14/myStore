@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('عمليات الشراء'),
])

@section('filter')
    @include('admin.buying_products.filter', [])
@stop

@section('table')
    @if (!empty($records) && count($records) > 0)

        <thead>
            <tr>
                <th>{{ __('#') }}</th>
                <th>{{ __('اسم المورد') }}</th>
                <th>{{ __('اسم المنتج') }}</th>
                <th>{{ __('الكميه') }}</th>
                <th>{{ __('سعر المنتج') }}</th>
                <th>{{ __('الاجمالي') }}</th>
                <th>{{ __('تاريخ الانشاء') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr id="removable{{ $record->id }}">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record?->product?->vendor?->name }}</td>
                    <td>{{ $record?->product?->name }}</td>
                    <td>{{ $record->quantity }}</td>
                    <td>{{ $record->price }}</td>
                    <td>{{ $record->price * $record->price }}</td>
                    <td>
                        <span class="badge bg-info">{{ $record->created_at?->format('Y-m-d H:i:s') }}</span>
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
