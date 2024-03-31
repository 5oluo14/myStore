@push('css')
    <link rel="stylesheet" href={{ asset('dashboard/extensions/flatpickr/flatpickr.min.css') }}>
@endpush

<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}" id="{{ __($name) }}_wrap">
    <label class="mb-1" for="{{ $name }}">{{ __($label) }}</label>
    <input name="{{ $name }}" type="text" class="form-control flatpickr-time-picker-24h flatpickr-input"
        id="flatpickr-time" placeholder="{{ $placeholder ? __($placeholder) : __($label) }}" readonly="readonly">
    <span class="help-block"><strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>
</div>

@push('scripts')
    <script src={{ asset('dashboard/extensions/flatpickr/flatpickr.min.js') }}></script>
    <script src={{ asset('dashboard/static/js/pages/date-picker.js') }}></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#flatpickr-time", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
        });
    </script>
@endpush
