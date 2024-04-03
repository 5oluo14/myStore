<div class="form-group {{ $errors->has($name) ? 'is-invalid' : '' }}">
    <label class="mb-1" for="{{ $name }}">{{ __($label) }}</label>
    <input type="number" class="form-control" id="{{ $name }}" name={{ $name }}
        placeholder="{{ $placeholder ? __($placeholder) : __($label) }}" spellcheck="false" data-ms-editor="true"
        {{ $required == 'true' ? 'required' : '' }} value="{{ $value == null ? old($name) : $value }}"
        {{ $disabled == true ? 'disabled' : '' }} {{ $min != null ? 'min=' . $min : '' }}>

    <span class="help-block"><strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>

</div>
