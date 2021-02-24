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
                My Olympiad
            </h3>
            <p class="text-muted mt-2">
                Lorem Ipsum dolor sitor orem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitorore
            </p>
            <ul class="list-order">
                <li class="active">
                    WeIntern National Mathematics Olympiad (WNMO)
                </li>
                <li>
                    WeIntern National Mathematics Olympiad (WNMO)
                </li>
                <li>
                    WeIntern National Mathematics Olympiad (WNMO)
                </li>
                <li>
                    WeIntern National Mathematics Olympiad (WNMO)
                </li>
            </ul>
           
            <div class="mt-5"></div>
            <h3>
                Olympiad Mock Tests
            </h3>
            <p class="text-muted mt-2">
                Lorem Ipsum dolor sitor orem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitorore
            </p>
            <div class="row">
                <div class="col-md-2 p-4">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 01
                    </div>
                </div>
                <div class="col-md-2 p-4">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 02
                    </div>
                </div>
                <div class="col-md-2 p-4">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 03
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
