@if ($usersGst)

    <h5>GST Form Details</h5>
    <div class="col-12">
        <div id="tableExample" data-list='{"valueNames":["trade","gst","type"],"page":15,"pagination":true}'>
            <div class="table-responsive scrollbar">
                @if (session('additionalfilenotexist'))
                    <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
                        <div class="bg-danger me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span>
                        </div>
                        <p class="mb-0 flex-1">{{ session('raisedfilenotexist') }}</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                        <tr>
                            <!-- <th scope="col"></th> -->
                            <th scope="col" class="sort" data-sort="trade">Trade Name</th>
                            <th scope="col" class="sort" data-sort="gst">GST Number</th>
                            <th scope="col" class="sort" data-sort="type">Type</th>
                            <th scope="col">Admin Note</th>
                            <th scope="col">User Note</th>
                            <th scope="col">Details</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Status</th>
                            <th scope="col">Note/Approve</th>
                        </tr>
                    </thead>

                    <tbody class="list">
                        @if ($usersGst)
                            @foreach ($usersGst as $detail)
                                <tr class="align-middle" data-toggle="collapse" data-target="#{{ $detail->gst_type }}"
                                    class="accordion-toggle">

                                    <td class="text-nowrap">
                                        <div class="align-items-center">

                                            <div class="ms-2">{{ $detail->trade_name }}
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-nowrap">{{ $detail->gst_number ? $detail->gst_number : '--' }}</td>

                                    <td class="text-nowrap">{{ $detail->type ? $detail->type : 'NA' }}</td>
                                    <td>{{ $detail->admin_note ? $detail->admin_note : 'NA' }}</td>
                                    <td>{{ $detail->user_note ? $detail->user_note : 'NA' }}</td>
                                    <td><a href="{{ url('admin/user/gsttype/details/' . $detail->id) }}">Details</a>
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
                                                            action="{{ url('admin/user/gst/download/additional/file/' . $detail->user_id) }}"
                                                            method="POST">
                                                            @csrf

                                                            <input type="hidden" name="files"
                                                                value="{{ $detail->additional_img }}">

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
                                        <td colspan=6>
                                            <span class="btn btn-info mt-1 mb-1 btn-xs" title="Add Note" type="button"
                                                onclick="openNoteModal({{ $detail->id }})"
                                                href="{{ url('gst/statusview/' . $detail->id) }}"
                                                data-target="#myNoteModal">
                                                Note<span class="glyphicon glyphicon-eye-open ms-1"></span>
                                            </span>

                                            @if ($detail->status == 3)
                                                <span class="btn btn-success mt-1 mb-1 btn-xs  " title="Change Status"
                                                    type="button" data-toggle="modal"
                                                    onclick="openApproveModal({{ $detail->id }})"
                                                    data-target="#myApprovedModal">
                                                    Approve<span class="glyphicon glyphicon-eye-open ms-1"></span>
                                                </span>
                                            @else
                                                @if ($detail->status == 4)
                                                    <span></span>
                                                @endif
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
                        <a class="fw-semi-bold" href="#!" data-list-view="*" data-btn="show-more">View all<span
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

@endif

<script>
    var adminUrl = "{{ url('admin') }}";

    function openNoteModal(itemId) {
        // Make an AJAX GET request to fetch the item details
        $.ajax({
            url: adminUrl + '/user/gst/statusview/' + itemId,
            type: 'GET',
            success: function(data) {

                // $('#myNoteModal .modal-body').html(data);
                $('#myNoteModal').modal('show');
                $('#myNoteModal #userid').val(data.user_id);
                $('#myNoteModal #gstid').val(data.id);

                $('#myNoteModal #type').val('note');

            },
            error: function(xhr) {
                // Handle error cases
                console.log(xhr.responseText);
            }
        });
    }


    function openApproveModal(itemId) {
        // Make an AJAX GET request to fetch the item details
        $.ajax({
            url: adminUrl + '/user/gst/statusview/' + itemId,
            type: 'GET',
            success: function(data) {

                $('#myApprovedModal').modal('show');
                $('#myApprovedModal #userid').val(data.user_id);
                $('#myApprovedModal #gstid').val(data.id);
                $('#myApprovedModal #tradename').val(data.trade_name);
                $('#myApprovedModal #type').val('approve');
            },
            error: function(xhr) {
                // Handle error cases
                console.log(xhr.responseText);
            }
        });
    }
</script>
