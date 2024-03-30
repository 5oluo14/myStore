<span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#products_{{ $record->id }}"
    style="cursor: pointer;">
    {{ __('admin.products') }} <i class="bi bi-eye"></i></span>
<div class="modal fade text-left" id="products_{{ $record->id }}" tabindex="-1" aria-labelledby="myModalLabel140"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="table-responsive ">
                    <table class="table mb-0 table table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin.image') }}</th>
                                <th>{{ __('admin.code') }}</th>
                                <th>{{ __('admin.name') }}</th>
                                <th>{{ __('admin.quantity') }}</th>
                                <th>{{ __('admin.total_price') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->products as $item)
                                <tr class="table">
                                    <td>{{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="avatar avatar-xl me-3">
                                            <img src="{{ asset($item->getMedia()->first()->photo_400) }}" alt="Avatar"
                                                class="avatar-img" style="object-fit: cover;">
                                        </div>
                                    </td>
                                    <td>
                                        {{ $item->code }}
                                    </td>
                                    <td>
                                        {{ $item->getLocaleAttribute('name') }}
                                    </td>
                                    <td>
                                        {{ $item->pivot->quantity }}
                                    </td>
                                    <td>
                                        {{ $item->pivot->total_price }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
