@extends('admin.layouts.master', [
    'page_header' => $page_header,
])
@section('content')
    @yield('filter')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive py-1 px-3">
                            <table class="table table-hover mb-0 text-center">
                                @yield('table')
                            </table>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $records->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
