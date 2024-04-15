@extends('admin.layouts.partials.crud-components.table', [
'page_header' => __('الموظفين'),
])

@section('filter')
@include('admin.admins.filter', [
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
        <th>{{ __('المرتب') }}</th>
        <th>{{ __('عدد ساعات العمل') }}</th>
        <th>{{ __('دفع المرتب') }}</th>
        <th>{{ __('تاريخ الانشاء') }}</th>
        @if (auth()->id() == 1)
        <th style="width: 1px">{{ __('الاجرائات') }}</th>
        @endif
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
        <td>{{ $record->salary }}</td>
        <td>{{ $record->work_hours }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $record->id }}">
                <i class="bi bi-bag-plus-fill"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"> دفع المرتب</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if($record->salaries()->count() > 0)

                            <table class="table mb-4">
                                <p>عمليات الدفع السابقة</p>
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">التاريخ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($record->salaries as $salary)
                                    <tr>
                                        <th scope="row">{{$salary?->id}}</th>
                                        <td>{{ $salary->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            <form class="form" id="edit-form" method="POST" action="{{ route('admins.pay-salary', $record->id) }}">
                                @csrf
                                <h4>هل انت متاكد من عملية دفع المرتب ل {{ $record->name }} ؟</h4>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                    <button type="submit" class="btn btn-primary">دفع</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

        </td>

        <td>{{ $record->created_at?->format('Y-m-d H:i:s') }}</td>
        @if (auth()->id() == 1)
        <td style="">

            @if ($record->id != 1)
            <div style="display:flex; gap:2px; justify-content:center;">
                <a href="{{ route('admins.edit', $record->id) }}">
                    <button class="btn icon icon-left btn-success me-2 text-nowrap"><i class="bi bi-pencil-square"></i></button>
                </a>
                <button id="{{ $record->id }}" data-token="{{ csrf_token() }}" data-route="{{ route('admins.destroy', $record->id) }}" type="button" class="btn icon icon-left btn-danger me-2 text-nowrap destroy">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </div>
            @else
            <div class="alert alert-danger text-center pt-3 ">
                <span style="font-size:14px">
                    المدير الرئيسي
                </span>
            </div>
            @endif
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
@else
<div>
    <h3 class="page-heading pt-5" style="text-align: center"> لا توجد بيانات للعرض !!</h3>
</div>
@endif


@stop
