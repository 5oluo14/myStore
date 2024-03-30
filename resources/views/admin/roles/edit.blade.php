@extends('admin.layouts.partials.crud-components.edit-page')
@inject('permissionModel', 'Spatie\Permission\Models\Permission')
@inject('roleModel', 'Spatie\Permission\Models\Role')

@php
    $permissions = $permissionModel::select('group')->groupBy('group')->get();
@endphp

@section('form')
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', value: $record->name) }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'false', placeholder: 'description') }}

    @foreach ($permissions as $permission)
        <label class="mb-1" for="{{ __('admin.permissions') }}">{{ __('admin.permissions') }}</label>
        <label>{{ __($permission->group) }}</label>
        <input type="checkbox" class="selectSameGroup form-check-input"
            id="{{ str_replace(' ', '_', __($permission->group)) }}">
        <label style="font-size: 15px; font-weight: 100"
            for="{{ str_replace(' ', '_', __($permission->group)) }}">{{ __('تحديد الكل') }}</label>
        <div class="row">
            @foreach ($permissionModel->where('group', $permission->group)->get() as $key => $value)
                <div class="form-group col-md-3" id="permissions_wrap" style="display: flex; margin: 0px 4px;">
                    <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}"
                        id="{{ __('admin.permissions') }}_wrap">
                        <div class="form-check">
                            <label for="{{ $value->id }}">{{ Str::limit($value->name, 25) }}</label>
                            <input type="checkbox" id="{{ $value->id }}"
                                class="form-check-input {{ str_replace(' ', '_', __($permission->group)) }}"
                                {{ $roleModel->hasPermissionTo($value) ? 'checked' : '' }} value="{{ $value->id }}"
                                name="permissions[]">
                            <span class="help-block">
                                <strong id="permissions_error">
                                    {{ $errors->first('permissions') }}
                                </strong>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@stop


@push('scripts')
    <script>
        $("#selectAll").click(function() {
            $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
        });

        $(".selectSameGroup").click(function() {
            let group = $(this).attr('id');
            $('.' + group).prop('checked', $(this).prop('checked'));
        });
    </script>
@endpush
