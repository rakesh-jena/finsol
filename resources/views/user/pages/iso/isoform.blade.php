@extends('user.layouts.app')
@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid" data-layout="container">
            @include('user.partials.header')
            <div class="content">
                @include('user.partials.aside')
                <div class="d-flex mb-4">
                    <span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                            class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i></span>
                    <div class="col">
                        <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">New Iso
                                Registration</span><span
                                class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span>
                        </h5>
                        <p class="mb-0">Get your ISO number quickly with Finsol</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-xl-12">
                        <div class="card mb-3">
                            <!--  <div class="card-header">
                                 <h6 class="mb-0">Select the Registration type</h6>
                            </div> -->
                            <div class="card-body">
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
                                <form class="needs-validation" novalidate="novalidate" action="{{ route('iso.register') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="detailsmargin card-header d-flex flex-between-center bg-light py-2">
                                        <h6 class="detailspadding mb-0">Personal/Entity Details</h6>
                                    </div>
                                    <div class="mt-1 row g-2">
                                        <!-- to be connected to backend --->
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="bootstrap-wizard-validation-wizard-company">Name for ISO
                                                </label><input class="form-control" type="text" name="iso_name"
                                                    placeholder="Name for ISO"
                                                    required="required" />
                                                <div class="invalid-feedback">Please provide name ISO</div>
                                            </div>
                                        </div>
                                        <!-- to be connected to backend --->

                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="bootstrap-wizard-validation-wizard-email">Email ID
                                                </label><input class="form-control" type="email"
                                                    value="{{ Auth::user()->email }}" name="email_id"
                                                    placeholder="Email address"
                                                    pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$"
                                                    required="required" id="bootstrap-wizard-validation-wizard-email"
                                                    data-wizard-validate-email="true" />
                                                <div class="invalid-feedback">You must add email</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="form-wizard-progress-wizard-addregnum">Mobile
                                                    Number linked with Aadhar</label><input class="form-control"
                                                    required=""
                                                    type="text" name="mobile_number" placeholder="Enter Mobile No"
                                                    id="form-wizard-progress-wizard-addregnum" />
                                                <div class="invalid-feedback">Please provide Mobile
                                                    number</div>
                                            </div>
                                        </div>
                                        <div class="detailsmargin card-header d-flex flex-between-center bg-light py-2">
                                            <h6 class="detailspadding mb-0">Upload documents required for Pan </h6>
                                        </div>
                                        <div class="row g-2 ">
                                            @foreach ($isoimages as $keyname => $image)
                                                <div class="col-6 mb-3">
                                                    <div class="mb-3">
                                                        <label>{{ $image['doc_name'] }} Upload :</label>
                                                        <!-- required="required"  -->
                                                        <input type="file" name="{{ $image['doc_key_name'] }}[]"
                                                            id="image-upload"
                                                            class="myfrm form-control" multiple />
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <button class="btn btn-primary me-1 mb-1" type="submit">Submit &
                                                    Pay</button>
                                                <p>Amount: ₹{{ $amount }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('user.partials.footer')
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!--- add Partner JS  -->
@endsection
