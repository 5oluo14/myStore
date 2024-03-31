@extends('admin.layouts.master', [
    'page_header' => __('عرض'),
])
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-content">
                        <form class="form" id="show-form">
                            @yield('form')
                            {{ \App\Base\Helper\Field::text(name: 'created_at', label: 'created_at', required: 'false', placeholder: 'created_at', value: $record->created_at?->format('Y-m-d H:i:s'), disabled: true) }}
                            {{ \App\Base\Helper\Field::text(name: 'updated_at', label: 'updated_at', required: 'false', placeholder: 'updated_at', value: $record->updated_at?->format('Y-m-d H:i:s'), disabled: true) }}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
