@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    OLYMPIAD EXAM ANSWERS
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
                        Olympiad Exam Answers
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="card p-4 100 h-75">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <img height="auto" src="{{ asset('admin/icon/icon-03.svg') }}" width="100%">
                        <h1 class="my-4">
                            The olympiad exam answer key will be available on
                        </h1>
                        <a class="btn btn-primary my-4 px-5" href="#">
                            May 03, 2021
                        </a>
                    </img>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
