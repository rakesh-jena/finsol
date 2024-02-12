<?php
$all_users = App\Models\User::where('type_of_user', 'Customer')->count();
$all_employees = App\Models\Admin::count();
$total = 0;
foreach (App\Models\Instamojo::where('staus', 'Credit')->get() as $transaction) {
    $total += (int) $transaction->amount;
}
?>
@extends('admin.layouts.admin')

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <h3 class="mb-0 mt-2 d-flex align-items-center">All Users<span class="ms-1 text-400"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Calculated according to last week's sales"><span class="far fa-question-circle"
                                data-fa-transform="shrink-1"></span></span></h3>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                        <div class="col">
                            <p class="font-sans-serif lh-1 mb-1 fs-4">{{ $all_users }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
                <div class="card-header pb-0">
                    <h6 class="mb-0 mt-2">Offices</h6>
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
        <div class="col-md-6 col-xxl-3">
            <div class="card h-md-100">
                <div class="card-header pb-0">
                    <h6 class="mb-0 mt-2">Total Payments</h6>
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
