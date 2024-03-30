@extends('admin.layouts.master', [
    'page_header' => __('admin.edit'),
])
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-content">
                        <form class="form" id="edit-form" method="POST" action="{{ route($update_route, $record->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @yield('form')
                            <hr />
                            <div class="col-12 d-flex justify-content-start">
                                <button type="submit" id="submitBtn" onclick="disableButton()"
                                    class="btn btn-primary me-1 mb-1">{{ __('admin.submit') }}</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">{{ __('admin.reset') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@push('scripts')
    <script>
        function disableButton() {
            // Get a reference to the button element
            var submitBtn = document.getElementById('submitBtn');
            var form = document.getElementById('edit-form');

            // Set the disabled attribute to true to disable the button
            submitBtn.disabled = true;
            form.submit();

            // After 5 seconds (5000 milliseconds), re-enable the button
            setTimeout(function() {
                submitBtn.disabled = false;
            }, 3000);
        }
    </script>
@endpush
