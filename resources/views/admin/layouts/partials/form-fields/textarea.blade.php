<div class="form-group mb-3">
    <label class="mb-1" for="{{ $name }}">{{ __('admin.' . $label) }}</label>
    <textarea class="form-control" id="{{ $name }}" rows="3" spellcheck="false" data-ms-editor="true"
        style="height: 71px;" placeholder="{{ __('admin.' . $label) }}" value="{{ $value ?? old($name) }}"
        placeholder="{{ $placeholder ? __('admin.' . $placeholder) : __('admin.' . $label) }}"
        {{ $disabled == true ? 'disabled' : '' }}></textarea>
    <span class="help-block"><strong id="{{ $name }}_error">{{ $errors->first($name) }}</strong></span>
</div>
