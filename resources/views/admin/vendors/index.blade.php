@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('admin.vendors'),
])

@section('filter')
    @include('admin.vendors.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table')
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('admin.name') }}</th>
            <th style="width: 1px">{{ __('admin.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr id="removable{{ $record->id }}">
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td style="">
                    <div style="display:flex; gap:2px; justify-content:center;">
                        {{-- <a href="{{ route($show_route, $record->id) }}">
                            <button class="btn icon icon-left btn-primary me-2 text-nowrap"><i class="bi bi-eye-fill"></i></button>
                        </a> --}}
                        <a href="{{ route($edit_route, $record->id) }}">
                            <button class="btn icon icon-left btn-success me-2 text-nowrap"><i
                                    class="bi bi-pencil-square"></i></button>
                        </a>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm-{{ $record->id }}">
                                    سعر الشحن
                                </button>
                        <button id="{{ $record->id }}" data-token="{{ csrf_token() }}"
                            data-route="{{ route($destroy_route, $record->id) }}" type="button"
                            class="btn icon icon-left btn-danger me-2 text-nowrap destroy">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </div>
                </td>



                                <!--login form Modal -->
                                <div class="modal fade text-left" id="inlineForm-{{ $record->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form method="post" action="{{ route('admin.updateGovernoratePackagePrice') }}">
                                                @csrf
                                                <div class="modal-body">

                                                    @foreach ($record->governorates as $item)
                                                        <label for="item-{{ $item->id }}">{{ $item->name }}</label>
                                                        <div class="form-group">
                                                            <input id="item-{{ $item->id }}" name="{{ $item->pivot->id }}" type="number" value="{{ $item->pivot->price }}" class="form-control">
                                                        </div>
                                                    @endforeach


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ms-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">حفظ</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            </tr>
        @endforeach
    </tbody>

@stop
