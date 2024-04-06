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
            <th>{{ __('تاريخ الانشاء') }}</th>
            @if (auth()->id()==1 )
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
                <td>{{ $record->created_at?->format('Y-m-d H:i:s') }}</td>
                @if (auth()->id() == 1)
                <td style="">
                    
                    @if ($record->id != 1)
                    <div style="display:flex; gap:2px; justify-content:center;">
                        <a href="{{ route('admins.edit', $record->id) }}">
                            <button class="btn icon icon-left btn-success me-2 text-nowrap"><i
                                    class="bi bi-pencil-square"></i></button>
                        </a>
                        <button id="{{ $record->id }}" data-token="{{ csrf_token() }}"
                            data-route="{{ route('admins.destroy', $record->id) }}" type="button"
                            class="btn icon icon-left btn-danger me-2 text-nowrap destroy">
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
