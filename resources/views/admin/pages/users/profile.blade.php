@extends('admin.layouts.admin')

@section('content')
    <div class="row g-3 mb-3">

        <div class="col-md-12 col-xxl-3">

            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <h3 class="mb-0 mt-2 d-flex align-items-center">{{ $user->name }}</h3>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Mobile: {{ $user->mobile }}</h5>
                            <h5>Aadhaar: {{ $user->aadhaar }}</h5>
                            <h5>Email: {{ $user->email }}</h5>
                            <h5>Date of Birth: {{ $user->birth_year }}</h5>
                        </div>
                        <div class="col-md-6">
                            @if ($user->image == null)
                                <img src="{{ asset('data/avatar.png') }}" alt="Profile Pic" width="100px" class="float-end">
                            @else
                                <img src="{{ asset($user->image) }}" alt="Profile Pic" width="100px" class="float-end">
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">GST Overview</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/gst/details/' . $userId) }}"
                                                class="btn btn-primary">GST</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Copy of Returns</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/gst/copyofreturns/' . $userId) }}"
                                                class="btn btn-primary">Copy of Returns</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"> User Documents </h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/gst/uploaddocuments/' . $userId) }}"
                                                class="btn btn-primary"> Documents</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Registrations</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/forms/dashboard/details/' . $userId) }}"
                                                class="btn btn-primary">Registrations</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Companies Act</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/companiesact/dashboard/details/' . $userId) }}"
                                                class="btn btn-primary">Companies Act</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Certification</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/certification/dashboard/details/' . $userId) }}"
                                                class="btn btn-primary">Certification</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Payments</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/payments/' . $userId) }}"
                                                class="btn btn-primary">Payments</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Legal Work</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/legal-work/dashboard/details/' . $userId) }}"
                                                class="btn btn-primary">Legal Work</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Loan & Finance</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="{{ URL('/admin/user/loan-finance/dashboard/details/' . $userId) }}"
                                                class="btn btn-primary">Loan & Finance</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
