<?php $page = 'ui-borders'; ?>
@extends('layout.mainlayout_admin')
@section('content')
 <!-- Page Wrapper -->
 <div class="page-wrapper">
    <div class="content">
        @component('admin.components.breadcrumb_admin')
        @slot('title')
       Borders
        @endslot
    @endcomponent
        <div class="row">

            <!-- Borders -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Borders</h5>
                    </div>
                    <div class="card-body">
                        <span class="border border-container"></span>
                        <span class="border-top border-container"></span>
                        <span class="border-end border-container"></span>
                        <span class="border-bottom border-container"></span>
                        <span class="border-start border-container"></span>
                    </div>
                </div>
            </div>
            <!-- /Borders -->

            <!-- Remove Borders -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Remove Borders</h5>
                    </div>
                    <div class="card-body">
                        <span class="border-0 border-container"></span>
                        <span class="border border-top-0 border-container"></span>
                        <span class="border border-end-0 border-container"></span>
                        <span class="border border-bottom-0 border-container"></span>
                        <span class="border border-start-0 border-container"></span>
                    </div>
                </div>
            </div>
            <!-- /Remove Borders -->

            <!-- Borders Widths -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Border Widths </h5>
                    </div>
                    <div class="card-body">
                        <span class="border border-container border-1"></span>
                        <span class="border border-container border-2"></span>
                        <span class="border border-container border-3"></span>
                        <span class="border border-container border-4"></span>
                        <span class="border border-container border-5"></span>
                    </div>
                </div>
            </div>
            <!-- /Borders Widths -->

            <!-- Borders Colors -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Border Colors</h5>
                    </div>
                    <div class="card-body">
                        <span class="border border-container border-primary"></span>
                        <span class="border border-container border-secondary"></span>
                        <span class="border border-container border-success"></span>
                        <span class="border border-container border-danger"></span>
                        <span class="border border-container border-warning"></span>
                        <span class="border border-container border-info"></span>
                        <span class="border border-container border-light"></span>
                        <span class="border border-container border-dark"></span>
                        <span class="border border-container border-white"></span>
                    </div>
                </div>
            </div>
            <!-- /Borders Colors -->

            <!-- Borders -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Border color Styling
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Email
                                address</label>
                            <input type="email" class="form-control border-success"
                                id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="h4 pb-3 mb-4 text-danger border-bottom border-danger">
                            Below Shows Danger Border
                        </div>
                        <div
                            class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end mb-1 text-muted">
                            Customizing borders with backgrounud colors
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Borders -->

            <!-- Borders with opacity -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Border with opacity
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="border border-success p-2 mb-2">This is default success border</div>
                        <div class="border border-success p-2 mb-2 border-opacity-75">This is 75%
                            opacity
                            success border
                        </div>
                        <div class="border border-success p-2 mb-2 border-opacity-50">This is 50%
                            opacity
                            success border
                        </div>
                        <div class="border border-success p-2 mb-2 border-opacity-25">This is 25%
                            opacity
                            success border
                        </div>
                        <div class="border border-success p-2 border-opacity-10">This is 10% opacity
                            success
                            border
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Borders with opacity -->

            <!-- Borders Radius -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Border Radius</h5>
                    </div>
                    <div class="card-body pb-2">
                        <img src="{{URL::asset('assets/img/profiles/profile-01.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-02.jpg')}}"
                            class="avatar-xxl avatar  d-placeholder-img rounded-top mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-03.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-end mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-04.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-bottom mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-05.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-start mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-06.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-circle mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-07.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img  rounded-pill mb-2" alt="img">
                    </div>
                </div>
            </div>
            <!-- /Borders Radius -->

            <!-- Sizes -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Sizes</h5>
                    </div>
                    <div class="card-body pb-2">
                        <img src="{{URL::asset('assets/img/profiles/profile-01.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-02.jpg')}}"
                            class="avatar-xxl avatar  d-placeholder-img rounded-top mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-03.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-end mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-04.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-start mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-05.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img rounded-circle mb-2" alt="img">
                        <img src="{{URL::asset('assets/img/profiles/profile-06.jpg')}}"
                            class="avatar-xxl avatar bd-placeholder-img  rounded-pill mb-2" alt="img">
                    </div>
                </div>
            </div>
            <!-- /Sizes -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@component('admin.components.themesettings')
@endcomponent
@endsection
