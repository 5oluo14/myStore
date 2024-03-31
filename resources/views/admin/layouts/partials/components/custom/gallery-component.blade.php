<span class="btn btn-info block" data-bs-toggle="modal" data-bs-target="#{{ $gallery_name . '_' . $record->id }}"
    style="cursor: pointer;">
    <i class="bi bi-images"></i>
</span>

<div class="modal fade text-left modal-borderless" id="{{ $gallery_name . '_' . $record->id }}" tabindex="-1"
    aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="myModalLabel140">
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                    <div class="card-header">
                        <h5 class="card-title">{{ __($gallery_name) }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery">
                            @foreach ($images as $img)
                                <div class="col-12 col-sm-12 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                    <img style="max-width:35rem;max-height: 13rem;margin-bottom: 10px;" class="w-100"
                                        src="{{ asset($img->original) }}"
                                        data-bs-target="#Gallerycarousel_{{ $img->id }}" data-bs-slide-to="0">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
