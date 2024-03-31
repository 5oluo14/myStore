<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}" id="{{ __($name) }}_wrap">
    <label for="{{ $name }}">{{ __($label) }}</label>
    <div class="">
        {!! Form::textarea($name, $value, [
            'class' => 'form-control ' . $plugin,
            'id' => $name,
            'placeholder' => $placeholder ? __($placeholder) : __($label),
            'rows' => 10,
        ]) !!}
    </div>
    <span class="help-block"><strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>
</div>
