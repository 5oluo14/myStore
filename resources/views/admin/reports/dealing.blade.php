@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => 'التعامل مع العملاء',
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
                <th>{{ __('مجموع عدد الطلبات') }}</th>
                <th>{{ __('مجموع المبلغ الكلي') }}</th>
                <th>{{ __('مجموع  الربح') }}</th>
                <th>{{ __('الطلبات') }}</th>
                <th>{{ __('تاريخ الانشاء') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr id="removable{{ $record->id }}">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->orders->count() }}</td>
                    <td>{{ $record->orders()->sum('total_price') }}</td>
                    <td>{{ $record->orders()->sum('total_profit') }}</td>
                    <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $record->id }}">
                <i class="bi bi-eye-fill"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">الطلبات</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الاسم</th>
                                        <th scope="col">الكمية</th>
                                        <th scope="col">الربح</th>
                                        <th scope="col">سعر المنتج</th>
                                        <!-- <th scope="col">الاجمالي</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($record->orders as $order)
                                    <tr>
                                        <th scope="row">{{$order?->id}}</th>

                                        <td>{{ $order->id}}</td>
                                        <td>{{ $order->total_quantity}}</td>
                                        <td>{{ $order->total_profit}}</td>
                                        <td>{{ $order->total_price}}</td>



                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الخروج</button>
                            </div>
                        </div>
                    </div>
                </div>

        </td> 
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
