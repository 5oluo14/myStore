<span class="btn btn-{{ $button_color }} block" data-bs-toggle="modal" data-bs-target="#{{ $record_name }}"
    style="cursor: pointer;">
    {{ __($record_name) }} <i class="bi bi-eye"></i>
</span>

<div class="modal fade text-left modal-borderless" id="{{ $record_name }}" tabindex="-1" aria-labelledby="myModalLabel1"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $record_name }}</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        @foreach ($show_record as $filter)
                                            <div class="col-md-2">
                                                <label
                                                    for="first-name-horizontal-icon">{{ __($filter['name']) }}</label>
                                            </div>
                                            <div class="col-md-10">
                                                {{ call_user_func_array([App\Base\Helper\Field::class, $filter['type']], array_pad([$filter['name'], $filter['label'], isset($filter['options']) ? $filter['options'] : null], 5, null)) }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
