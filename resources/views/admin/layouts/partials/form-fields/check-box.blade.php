<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}" id="{{ __($name) }}_wrap">
    <label class="mb-1" for="{{ $name }}">{{ __($label) }}</label>
    <div class="form-check">
        <div class="checkbox row" id="{{ $name }}">
            @foreach ($options as $key => $value)
                <div class="col-md-3">
                    <label for="{{ $key }}">{{ Str::limit($value, 25) }}</label>
                    <input type="checkbox" id="{{ $key }}" class="form-check-input" checked=""
                        value="{{ $key }}" name="{{ $name }}[]"
                        {{ $disabled == true ? 'disabled' : '' }}>
                </div>
            @endforeach
        </div>
        <span class="help-block"><strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>
    </div>
</div>
