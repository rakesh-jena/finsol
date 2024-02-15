@extends('user.layouts.app')
@section('content')
    @php
        $state = App\Models\State::where('id', $user->state)->first()->name;
        $district = App\Models\District::where('d_code', $user->district)->first()->name;
        $block = App\Models\Block::where('id', $user->block)->first()->name;
    @endphp
    <div class="row">
        <div class="col-12">
            <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                    <div class="cover-image">
                        <div class="bg-holder rounded-3 rounded-bottom-0"
                            style="background-image:url({{ url('assets/img/generic/4.jpg') }});"></div>
                    </div>
                    <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                        <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                            @if ($user->image == null)
                                <img src="{{ url('images/avatar.png') }}" width="200" alt=""
                                    data-dz-thumbnail="data-dz-thumbnail" />
                            @else
                                <img src="{{ url('uploads/users/' . $user->id . '/profile/' . $user->image) }}"
                                    width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />
                            @endif
                            <form id="image-form" enctype="multipart/form-data" action="{{ url('update_image') }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input class="d-none" id="profile-image" type="file" name="image"
                                    onchange="javascript:this.form.submit();" />
                                <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image">
                                    <span class="bg-holder overlay overlay-0"></span>
                                    <span class="z-1 text-white dark__text-white text-center fs--1">
                                        <span class="fas fa-camera"></span>
                                        <span class="d-block">Update</span>
                                    </span>
                                </label>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Profile</h5>
                </div>
                <div class="card-body bg-light">
                    <form class="row g-3" action="{{ url('profile-info-update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-6">
                            <label class="form-label" for="first-name">Full
                                Name</label>
                            <input class="form-control" id="first-name" type="text" name="name"
                                value="{{ $user->name }}" readonly="readonly" />
                        </div>
                        <div class="col-lg-6"> <label class="form-label" for="last-name">Aadhaar
                                Number</label><input class="form-control" id="last-name" type="text"
                                value="{{ $user->aadhaar }}" readonly="readonly" name="aadhaar" /></div>
                        <div class="col-lg-6"> <label class="form-label" for="email1">Email</label><input
                                class="form-control" id="email1" type="text" name="email"
                                value="{{ $user->email }}" />
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="email2">Mobile</label>
                            <input class="form-control" id="email2" type="text" name="mobile"
                                value="{{ $user->mobile }}" readonly="readonly" />
                        </div>
                        <div class="col-lg-6"><label class="form-label" for="email3">Block</label><input
                                class="form-control" id="email3" type="text" name="block"
                                value="{{ $block }}" readonly="readonly" />
                        </div>
                        <div class="col-lg-6"><label class="form-label" for="email4">District</label><input
                                class="form-control" id="email4" type="text" name="district"
                                value="{{ $district }}" readonly="readonly" />
                        </div>
                        <div class="col-lg-6"><label class="form-label" for="email5">State</label><input
                                class="form-control" id="email5" type="text" name="state"
                                value="{{ $state }}" readonly="readonly" />
                        </div>
                        <h5>Change Password</h5>
                        <div class="col-lg-6">
                            <label class="form-label" for="current_password">Current Password</label>
                            <input class="form-control" id="current_password" type="password" name="current_password"/>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="new_password">New Password</label>
                            <input class="form-control" id="new_password" type="password" name="new_password"/>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="new_password_confirmation">Retype New Password</label>
                            <input class="form-control" id="new_password_confirmation" type="password"
                                name="new_password_confirmation"/>
                        </div>
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--- add Partner JS  -->
@endsection
