@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('المنتجات'),
])

@section('filter')
    @include('admin.products.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    @if (!empty($records) && count($records) > 0)

        <thead>
            <tr>
                <th>{{ __('#') }}</th>
                <th>{{ __('الاسم') }}</th>
                <th>{{ __('الوصف') }}</th>
                <th>{{ __('التصنيف') }}</th>
                <th>{{ __('المورد') }}</th>
                <th>{{ __('سعر الشراء') }}</th>
                <th>{{ __('سعر البيع') }}</th>
                <th>{{ __('الكمية المتاحة') }}</th>
                <th>{{ __('الكمية المباعة') }}</th>
                <th>{{ __('الحد الادنى من الكمية') }}</th>
                <th>{{ __('تاريخ الانشاء') }}</th>
                {{-- <th>{{ __('اضافة كمية') }} </th> --}}
                <th style="width: 1px">{{ __('الاجراءات') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr id="removable{{ $record->id }}">
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->category->name }}</td>
                    <td>{{ $record->vendor->name }}</td>
                    <td>{{ $record->buying_price }}</td>
                    <td>{{ $record->selling_price }}</td>
                    <td>{{ $record->quantity }}</td>
                    <td>{{ $record->saled_quantity }}</td>
                    <td>{{ $record->min_quantity }}</td>
                    <td>{{ $record->created_at?->format('Y-m-d') }}</td>
                    {{-- <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-bag-plus-fill"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> اضافة كمية</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                         <form class="form" id="edit-form" method="POST" action="{{ route('products.add-quantity', $record->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            {{ \App\Helper\Field::number(name: 'quantity', label: 'الكمية', required: 'true', placeholder: 'الكمية',min: 1) }}     
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">الغاء</button>
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                    </div>
                                        </form>

                                </div>
                            </div>
                        </div>

                    </td> --}}
                    <!-- Button trigger modal -->
                    <td style="">
                        <div style="display:flex; gap:2px; justify-content:center;">
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
    @else
        <div>
            <h3 class="page-heading pt-5" style="text-align: center"> لا توجد بيانات للعرض !!</h3>
        </div>
    @endif


@stop
