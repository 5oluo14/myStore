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
        <th>{{ __(' الكمية الاجمالية') }}</th>
        <th>{{ __('الربح الاجمالي') }}</th>
        <th>{{ __('السعر الاجمالي') }}</th>
        <th>{{ __('تاريخ الانشاء') }}</th>
        <th style="width: 1px">{{ __('المنتجات') }}</th>
    </tr>
</thead>
<tbody>
    @foreach ($records as $record)
    <tr id="removable{{ $record->id }}">
        <td>{{ $record->id }}</td>
        <td>{{ $record?->client?->name }}</td>
        <td>{{ $record->total_quantity }}</td>
        <td>{{ $record->total_profit }}</td>
        <td>{{ $record->total_price }}</td>
        <td>
            <span class="badge bg-info">{{ $record->created_at?->format('Y-m-d H:i:s') }}</span>
        </td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $record->id }}">
                <i class="bi bi-eye-fill"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">المنتجات</h1>
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
                                        <th scope="col">الاجمالي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($record->products as $product)
                                    <tr>
                                        <th scope="row">{{$product?->id}}</th>

                                        <td>{{ $product->name}}</td>
                                        <td>{{ $product->pivot->quantity}}</td>
                                        <td>{{ $product->pivot->profit}}</td>
                                        <td>{{ $product->pivot->price}}</td>
                                        <td>{{ $product->pivot->price * $product->pivot->quantity}}</td>



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

    </tr>
    @endforeach
</tbody>
@else
<div>
    <h3 class="page-heading pt-5" style="text-align: center"> لا توجد بيانات للعرض !!</h3>
</div>
@endif

@stop
