@if ($usersIso)
    <div class="row">
        <h5>ISO Form Details</h5>
        <div class="col-12">
            <div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":15,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    @if (session('additionalfilenotexist_iso'))
                        <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
                            <div class="bg-danger me-3 icon-item"><span
                                    class="fas fa-check-circle text-white fs-3"></span>
                            </div>
                            <p class="mb-0 flex-1">{{ session('additionalfilenotexist_iso') }}</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <!-- <th scope="col"></th> -->

                                <th scope="col">Email Id</th>
                                <th scope="col">Type</th>
                                <th scope="col">Admin Note</th>
                                <th scope="col">User Note</th>
                                <th scope="col">Details</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Status</th>
                                <th scope="col">Note/Approve</th>
                            </tr>
                        </thead>

                        <tbody class="list">
                            @if ($usersIso)
                                @foreach ($usersIso as $detail)
                                    <tr class="align-middle" data-toggle="collapse" class="accordion-toggle">

                                        <td class="text-nowrap">{{ $detail->email_id ? $detail->email_id : '--' }}</td>

                                        <td class="text-nowrap">{{ $detail->type ? $detail->type : '--' }}</td>
                                        <td>{{ $detail->admin_note ? $detail->admin_note : '--' }}</td>
                                        <td>{{ $detail->user_note ? $detail->user_note : '--' }}</td>
                                        <td><a
                                                href="{{ url('admin/user/forms/details/iso/' . $detail->id) }}">Details</a>
                                        </td>
                                        <td>
                                            @if ($detail->payment_status == 'Credit')
                                                <span class="btn btn-success ml-1 mb-1 btn-sm"> Paid</span>
                                            @else
                                                <span class="btn btn-warning ml-1 mb-1 btn-sm"> Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($detail->status == 2)
                                                <div><span
                                                        class="badge badge rounded-pill d-block p-2 badge-subtle-warning">Query
                                                        Raised<span class="ms-1 fas fa-stream"
                                                            data-fa-transform="shrink-2"></span></span>

                                                </div>
                                            @else
                                                @if ($detail->status == 3)
                                                    <div><span
                                                            class="badge badge rounded-pill d-block p-2 badge-subtle-warning">Query
                                                            Updated<span class="ms-1 fas fa-stream"
                                                                data-fa-transform="shrink-2"></span></span>
                                                        @if ($detail->additional_img != '')
                                                            <form
                                                                action="{{ url('admin/user/forms/additional/file/' . $detail->user_id) }}"
                                                                method="POST">
                                                                @csrf

                                                                <input type="hidden" name="files"
                                                                    value="{{ $detail->additional_img }}">
                                                                <input type="hidden" name="form_type" value="Iso">
                                                                <button class="btn btn-primary btn-xs mt-2 bsgstdwbtn"
                                                                    type="submit"><small>Download
                                                                        File</small>&nbsp;&nbsp;<span
                                                                        class="text-500 fas fa-download"></span></button>
                                                            </form>
                                                        @endif

                                                    </div>
                                                @else
                                                    @if ($detail->status == 4)
                                                        <span
                                                            class="badge badge rounded-pill d-block p-2 badge-subtle-success">Approved<span
                                                                class="ms-1 fas fa-check"
                                                                data-fa-transform="shrink-2"></span></span>

                                                        @if ($detail->approved_img != '')
                                                            <form
                                                                action="{{ url('admin/user/forms/approved/file/' . $detail->user_id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="form_type" value="Iso">
                                                                <input type="hidden" name="files"
                                                                    value="{{ $detail->approved_img }}">

                                                                <button class="btn btn-primary btn-xs mt-2 bsgstdwbtn"
                                                                    type="submit"><small>Download
                                                                        File</small>&nbsp;&nbsp;<span
                                                                        class="text-500 fas fa-download"></span></button>
                                                            </form>
                                                        @endif
                                                    @else
                                                        <span
                                                            class="badge badge rounded-pill d-block p-2 badge-subtle-primary">Processing
                                                            <span class="ms-1 fas fa-redo" data-fa-transform="shrink-2">
                                                            </span>
                                                        </span>
                                                    @endif
                                                @endif
                                            @endif
                                        </td>

                                        @if ($detail->status == 1 || $detail->status == 3)
                                            <td colspan=6 style="display:flex;">
                                                <span class="btn btn-info ml-1 mb-1 btn-sm" title="Add Note"
                                                    type="button" onclick="openIsoNoteModal({{ $detail->id }})"
                                                    href="{{ url('forms/statusview/' . $detail->id) }}"
                                                    data-target="#myIsoNoteModal">
                                                    Note<span class="glyphicon glyphicon-eye-open ms-1"></span>
                                                </span>

                                                <span class="btn btn-success ml-1 mb-1 btn-sm  " title="Change Status"
                                                    type="button" data-toggle="modal"
                                                    onclick="openIsoApproveModal({{ $detail->id }})"
                                                    data-target="#myIsoApprovedModal">
                                                    Approve<span class="glyphicon glyphicon-eye-open ms-1"></span>
                                                </span>
                                            @else
                                                @if ($detail->status == 4)
                                                    <span></span>
                                                @endif

                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>
                <div class="row align-items-center mt-3">
                    <div class="pagination d-none"></div>
                    <div class="col">
                        <p class="mb-0 fs--1">
                            <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                            <span class="d-none d-sm-inline-block"> &mdash;</span>
                            <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                class="fw-semi-bold d-none" href="#!" data-list-view="less">View
                                Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </p>
                    </div>
                    <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button"
                            data-list-pagination="prev"><span>Previous</span></button><button
                            class="btn btn-sm btn-primary px-4 ms-2" type="button"
                            data-list-pagination="next"><span>Next</span></button></div>
                </div>
            </div>

        </div>
        <div class="col-auto ps-0">
            <div class="echart-bar-weekly-sales h-100"></div>
        </div>
    </div>

@endif

<script>
    var urlpath = "{{ url('admin') }}";

    function openIsoNoteModal(itemId) {
        // Make an AJAX GET request to fetch the item details
        $.ajax({
            url: urlpath + '/user/forms/statusview' + '?for=note&formtype=iso&id=' + itemId,
            type: 'GET',
            success: function(data) {
                $('#myCommonNoteModal').modal('show');
                $('#note-modal-body-div').html(data.modalBody);
            },
            error: function(xhr) {
                // Handle error cases
                console.log(xhr.responseText);
            }
        });
    }


    function openIsoApproveModal(itemId) {
        // Make an AJAX GET request to fetch the item details
        $.ajax({
            url: urlpath + '/user/forms/statusview' + '?for=approve&formtype=iso&id=' + itemId,
            type: 'GET',
            success: function(data) {

                $('#myCommonApprovedModal').modal('show');
                $('#approve-modal-body-div').html(data.modalBody);
            },
            error: function(xhr) {
                // Handle error cases
                console.log(xhr.responseText);
            }
        });
    }
</script>
