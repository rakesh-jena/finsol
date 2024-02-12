@if (count($userNetworthDetails) > 0)<b>Networth Details</b>
    <table class="table table-condensed table-striped mt-2 mb-4">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email Id</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Type</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Status</th>
            </tr>
        </thead>

        <tbody>
            @if ($userNetworthDetails)
                @foreach ($userNetworthDetails as $key => $detail)
                    <tr class="align-middle" data-toggle="collapse" data-target="#{{ $detail->type . $key }}"
                        class="accordion-toggle">

                        <td class="text-nowrap">{{ isset($detail->name) ? $detail->name : '-' }}</td>

                        <td class="text-nowrap">
                            <div class="align-items-center">

                                <div class="ms-2">{{ $detail->email_id }}
                                </div>
                            </div>
                        </td>

                        <td class="text-nowrap">{{ isset($detail->mobile_number) ? $detail->mobile_number : '-' }}</td>

                        <td class="text-nowrap">{{ isset($detail->type) ? $detail->type : '-' }}</td>

                        <td class="text-nowrap">
                            @if ($detail->payment_status == 'Credit')
                                <span class="badge badge rounded-pill d-block p-2 badge-subtle-success">
                                    Paid
                                    <span class="ms-1 fas fa-check" data-fa-transform="shrink-2">
                                    </span>
                                @else
                                    <form action="{{ route('dashboard.register') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="form_type" value="Networth">
                                        <input type="hidden" name="insert_id" value="{{ $detail->id }}">
                                        <input type="hidden" name="payment_amount"
                                            value="{{ $networth_instamojo_amount }}">
                                        <input type="hidden" name="route" value="form_dashboard">
                                        <input type="hidden" name="payment_purpose" value="Networth">
                                        <input type="hidden" name="email_id" value="{{ $detail->email_id }}">
                                        <input type="hidden" name="name_of_pan" value="{{ $detail->name_of_pan }}">
                                        <input type="hidden" name="mobile_number"
                                            value="{{ $detail->mobile_number }}">

                                        <button class="btn btn-primary btn-xs mt-2 bsgstdwbtn" type="submit">
                                            <small>Pay</small>
                                        </button>
                                    </form>
                                </span>
                            @endif
                        </td>

                        <td colspan=7>
                            @if ($detail->status == 2)
                                <span class="badge badge rounded-pill d-block p-2 badge-subtle-warning accordion-toggle"
                                    data-bs-toggle="collapse" data-bs-target="#collapseContent1">Query
                                    Raised - Click here <span class="ms-1 fas fa-stream"
                                        data-fa-transform="shrink-2"></span>
                                </span>
                                @if ($detail->raised_img != '')
                                    <form action="{{ route('certification_web_raisedFile') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="form_type" value="Networth">
                                        <input type="hidden" name="files" value="{{ $detail->raised_img }}">

                                        <button class="btn btn-primary btn-xs mt-2 bsgstdwbtn"
                                            type="submit"><small>Download
                                                File</small>&nbsp;&nbsp;<span
                                                class="text-500 fas fa-download"></span></button>
                                    </form>
                                @endif
                            @else
                                @if ($detail->status == 3)
                                    <span
                                        class="badge badge rounded-pill d-block p-2 badge-subtle-warning toggleButton1">Query
                                        Updated<span class="ms-1 fas fa-stream"
                                            data-fa-transform="shrink-2"></span></span>
                                @else
                                    @if ($detail->status == 4)
                                        <span
                                            class="badge badge rounded-pill d-block p-2 badge-subtle-success">Approved<span
                                                class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>

                                        @if ($detail->approved_img != '')
                                            <form action="{{ route('certification_web_approvedFile') }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="form_type" value="Networth">
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

                    </tr>
                    @if ($detail->status == 2)
                        <tr>
                            <td colspan="6" class="hiddenRow1">
                                <div id="{{ $detail->type . $key }}" class="accordian-body collapse ">
                                    <!-- {{ $detail->gst_type }} -->

                                    <br /><br />
                                    <div class="col">
                                        <form class="needs-validation" novalidate="novalidate"
                                            action="{{ route('certification_query_raised') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <span
                                                class="badge badge rounded-pill d-block p-2 badge-subtle-warning toggleButton">Query
                                                Raised
                                            </span>
                                            <br />
                                            <div class="mb-3">
                                                <label class="form-label" for="note">
                                                    {{ $detail->admin_note }}
                                                </label>
                                            </div>

                                            <label>Enter Your Suggestion:</label>
                                            <textarea name="user_note" style="height:90px;width:100%"></textarea>

                                            <input type="hidden" name="form_type" value="Networth" />

                                            <input type="hidden" name="id" value="{{ $detail->id }}" />
                                            <div class="mt-3">
                                                <label>Upload Required
                                                    doc:</label>
                                                <input type="file" name="additional_img[]" id="image-upload"
                                                    class="myfrm form-control" multiple />
                                            </div>

                                            <div class="mt-3">
                                                <button class="btn btn-primary me-1 mb-1" type="submit">Save</button>

                                                <button class="btn btn-primary me-1 mb-1"
                                                    type="reset">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                    <br />
                                </div>
                            </td>

                        </tr>
                    @endif
                @endforeach
            @endif
        </tbody>
    </table>

@endif
