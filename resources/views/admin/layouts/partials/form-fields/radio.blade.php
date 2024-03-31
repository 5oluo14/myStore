<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}" id="{{ $name }}_wrap">
    <label class="mb-1" for="{{ $name }}">{{ __($label) }}</label>
    <div class="row">
        @foreach ($options as $key => $value)
            <div class="col-md-2">
                <div class="form-check">
                    <div class="radio">
                        <input type="radio" id="{{ $key }}" class="form-check-input"
                            {{ $checked == $key ? 'checked' : '' }} value="{{ $key }}"
                            name="{{ $name }}">
                        <label for="{{ $key }}" for="{{ $key }}">{{ __($value) }}</label>
                    </div>
                    <span class="help-block"><strong
                            id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>
                </div>
            </div>
        @endforeach
    </div>

</div>
