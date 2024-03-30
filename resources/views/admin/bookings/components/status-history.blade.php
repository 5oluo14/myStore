<span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#status_{{ $record->id }}" style="cursor: pointer;">
    {{ $record->status }} <i class="bi bi-eye"></i></span>
<div class="modal fade text-left" id="status_{{ $record->id }}" tabindex="-1" aria-labelledby="myModalLabel140"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="table-responsive ">
                    <table class="table mb-0 table table-borderless">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin.status') }}</th>
                                <th>{{ __('admin.created_at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (json_decode($record->status_history, true) as $status)
                                <tr class="table">
                                    <td>{{ $loop->iteration }}
                                    </td>
                                    <td><span class="badge bg-primary">{{ $status['status'] }}</span>
                                    </td>
                                    <td><span class="badge bg-info">{{ $record['created_at'] }}</span>
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
