@extends('admin.layouts.admin')

@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            @include('admin.partials.aside')
            <div class="row g-3 mb-3">

                <div class="col-md-12 col-xxl-3">
                    <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                            <h4 class="mb-0 mt-2 d-flex align-items-center">All Form Details</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">

                            @if (session('success'))
                                <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                                    <div class="bg-success me-3 icon-item"><span
                                            class="fas fa-check-circle text-white fs-3"></span>
                                    </div>
                                    <p class="mb-0 flex-1">{{ session('success') }}</p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (Auth::user()->type_of_user === 'Head Office')
                                <h6 class="mb-1">Filter</h6>
                                <form action="" class="row">
                                    <input type="hidden" name="form_type" value="{{request('form_type')}}">
                                    <div class="col-3">
                                        <select class="form-select form-select-sm mb-3" id="filter-select-state"
                                            name="state">
                                            <option selected="" value="">Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-3 px-3">
                                        <select class="form-select form-select-sm mb-3" id="filter-select-district"
                                            name="district">
                                            <option selected="" value="">Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select form-select-sm mb-3" id="filter-select-block"
                                            name="block">
                                            <option selected="" value="">Select Block</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-primary btn-sm" type="submit">
                                            <i class="fas fa-filter"></i>
                                        </button>
                                    </div>
                                </form>
                            @endif
                            @include('admin.pages.forms.list')

                        </div>
                    </div>
                </div>
            </div>
            @include('admin.partials.footer')
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection

@include('admin.pages.users.modal')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
