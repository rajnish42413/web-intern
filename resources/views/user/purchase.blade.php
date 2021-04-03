@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    My PURCHASES
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
                        MY PURCHASES
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="card p-4 w-100">
            <h3>
                My Olympiad ( PURCHASES )
            </h3>
            <p class="text-muted mt-2">
               Participate in all WeIntern National Olympiads & win scholarship worth ₹10 lakhs.
            </p>
            <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
        </div>
    </div>
</section>
@stop
