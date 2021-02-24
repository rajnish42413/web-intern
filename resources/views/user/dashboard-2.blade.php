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
            <div class="col-md-3">
                <div class="card">
                    <div>
                        <h2>
                            02
                        </h2>
                        <h3>
                            Total Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="#">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div>
                        <h2>
                            02
                        </h2>
                        <h3>
                            Total Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="#">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div>
                        <h2>
                            02
                        </h2>
                        <h3>
                            Total Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="#">
                                View More
                            </a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div>
                        <h2>
                            02
                        </h2>
                        <h3>
                            Total Olympiads
                        </h3>
                    </div>
                    <div class="text-right">
                        <img height="auto" src="{{ asset('admin/icon/icon-01.svg') }}" width="46px">
                            <a href="#">
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
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary border p-4">
                            <div class="badge-primary-left">Paid</div>
                            <h3 class="text-primary mt-5">
                                WeIntern National Mathematics Olympiad (WNMO)
                            </h3>
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-primary border p-4">
                            <div class="badge-primary-left">Paid</div>
                            <h3 class="mt-5">
                                WeIntern National Science Olympiad (WNSO)
                            </h3>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info border p-4">
                            <div class="badge-info-left">Paid</div>
                            <h3 class="text-primary mt-5">
                                WeIntern National Science Olympiad (WNSO)
                            </h3>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info border p-4">
                            <div class="badge-info-left">Paid</div>
                            <h3 class="mt-5">
                               WeIntern National Cyber Olympiad (WNCO)
                            </h3>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-dark p-4 mb-4 list-flex">
                            <div>
                            <h3 class="text-white my-2">Update Profile</h3>
                            <p class="text-white mb-0">Kindly update your profile to complete the registration process</p>
                           </div>
                            <a href="#" class="btn btn-primary text-right">Update Now</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-dark p-4 mb-4 list-flex">
                            <div>
                             <h3 class="text-white my-2">Verify Your Profile</h3>
                             <p class="text-white mb-0">Kindly complete your verification to be eligible for the Olympiads</p>
                          </div>
                          <a href="#" class="btn btn-primary text-right">Verify Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
               <div class="card p-5 card-primary text-center">
                    <img src="{{ asset('admin/icon/icon-02.svg') }}" width="80%" height="auto" class="mx-auto">
                    <h1 class="my-4">Take WeIntern Mock Test</h1>
                    <p class="my-4">Practice now before olympiad</p>
                    <a href="#" class="btn btn-default btn-lg">Practice Now</a>
               </div>
            </div>
        </div>
    </div>
</section>
@stop
