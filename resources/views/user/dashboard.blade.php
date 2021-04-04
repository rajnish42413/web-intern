@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    HOME
                </h2>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Edit Profile
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="dashboard-counts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div>
                        <h2>
                            04
                        </h2>
                        <h3>
                            Total Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="{{ url('exam-information') }}" target="_blank">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div>
                        <h2>
                            00
                        </h2>
                        <h3>
                            My Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="{{ url('olympiad-exam') }}">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div>
                        <h2>
                            {{ auth()->user()->strength() }} %
                        </h2>
                        <h3>
                            Profile Strength
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="{{ url('purchases') }}">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('purchases') }}" class="w-100">
                            <div class="card border-primary border p-4">
                                <div class="badge-primary-left">
                                    Paid
                                </div>
                                <h3 class="text-primary mt-5">
                                    WeIntern National Mathematics Olympiad (WNMO)
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('purchases') }}" class="w-100">
                            <div class="card border-primary border p-4">
                                <div class="badge-primary-left">
                                    Paid
                                </div>
                                <h3 class="mt-5">
                                    WeIntern National Science Olympiad (WNSO)
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info border p-4">
                            <div class="badge-info-left">
                                Buy Now
                            </div>
                            <h3 class="text-primary mt-5">
                                WeIntern National Science Olympiad (WNSO)
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info border p-4">
                            <div class="badge-info-left">
                                Buy Now
                            </div>
                            <h3 class="mt-5">
                                WeIntern National Cyber Olympiad (WNCO)
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card-dark p-4 mb-4 list-flex">
                            <div>
                                <h3 class="text-white my-2">
                                    Update Profile
                                </h3>
                                <p class="text-white mb-0">
                                    Kindly update your profile to complete the registration process
                                </p>
                            </div>
                            <a class="btn btn-primary text-right" href="{{ url('user/edit') }}">
                                Update Now
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card card-dark p-4 mb-4 list-flex">
                            <div>
                                <h3 class="text-white my-2">
                                    Verify Your Profile
                                </h3>
                                <p class="text-white mb-0">
                                    Kindly complete your verification to be eligible for the Olympiads
                                </p>
                            </div>
                            <a class="btn btn-primary text-right" href="{{ url('user/profile-verification') }}">
                                Verify Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-5 card-sec text-center">
                    <img class="mx-auto" height="auto" src="{{ asset('admin/icon/icon-02.svg') }}" width="80%">
                        <h1 class="my-4">
                            Take WeIntern Mock Test
                        </h1>
                        <p class="mb-4 text-muted text-center">
                            Practice now before olympiad
                        </p>
                        <a class="btn btn-dark btn-lg" href="{{ url('mock-tests') }}">
                            Practice Now
                        </a>
                    </img>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
