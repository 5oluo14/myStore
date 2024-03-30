<span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#services_{{ $record->id }}"
    style="cursor: pointer;">
    {{ $record->service->getLocaleAttribute('name') }}
    <i class="bi bi-eye"></i></span>
<div class="modal fade text-left" id="services_{{ $record->id }}" tabindex="-1" aria-labelledby="myModalLabel140"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="table-responsive ">
                    <table class="table mb-0 table table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin.name') }}</th>
                                <th>{{ __('admin.code') }}</th>
                                <th>{{ __('admin.image') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table">
                                <td>{{ $record->service->id }}
                                </td>
                                <td>
                                    {{ $record->service->getLocaleAttribute('name') }}
                                </td>
                                <td>
                                    {{ $record->service->code }}
                                </td>
                                <td>
                                    <div class="avatar avatar-xl me-3">
                                        <img src="{{ asset($record->service->getMedia()->first()->photo_400) }}"
                                            alt="Avatar" class="avatar-img" style="object-fit: cover;">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
