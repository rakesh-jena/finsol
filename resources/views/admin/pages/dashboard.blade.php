<?php
$all_employees = App\Models\Admin::count();
?>
@extends('admin.layouts.admin')

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <h5 class="mb-0 mt-2 d-flex align-items-center">
                        All Users
                    </h5>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                        <div class="col">
                            <p class="font-sans-serif lh-1 mb-1 fs-4">{{ $count }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($user->type_of_user == 'Head Office')
            <div class="col-md-6 col-xxl-3">
                <div class="card h-md-100">
                    <div class="card-header pb-0">
                        <h5 class="mb-0 mt-2 d-flex align-items-center">
                            Offices
                        </h5>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-end">
                        <div class="row justify-content-between">
                            <div class="col-auto align-self-end">
                                <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">{{ $all_employees }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
                <div class="card-header pb-0">
                    <h5 class="mb-0 mt-2 d-flex align-items-center">
                        Total Payments
                    </h5>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row justify-content-between">
                        <div class="col-auto align-self-end">
                            <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">₹{{ $total }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
