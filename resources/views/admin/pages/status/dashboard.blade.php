@extends('admin.layouts.admin')

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-md-12 col-xxl-3">
            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <h4 class="mb-0 mt-2 d-flex align-items-center">All Forms</h4>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">

                    @if (session('success'))
                        <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                            <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span>
                            </div>
                            <p class="mb-0 flex-1">{{ session('success') }}</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Auth::user()->type_of_user === 'Head Office')
                        <h6 class="mb-1">Filter</h6>
                        <form action="" class="row">
                            <div class="col-md-3 col-12">
                                <select class="form-select form-select-sm mb-3" id="filter-select-state" name="state">
                                    <option selected="" value="">Select State</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3 col-12 px-3">
                                <select class="form-select form-select-sm mb-3" id="filter-select-district" name="district">
                                    <option selected="" value="">Select District</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-12">
                                <select class="form-select form-select-sm mb-3" id="filter-select-block" name="block">
                                    <option selected="" value="">Select Block</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-12">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <i class="fas fa-filter"></i>
                                </button>
                            </div>
                        </form>
                    @endif
                    @include('admin.pages.status.list')
                </div>
            </div>
        </div>
    </div>
@endsection