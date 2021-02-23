@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Edit Profile
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
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>
                            Basic Form
                        </h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <form>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" placeholder="Email Address" type="email">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Password
                                </label>
                                <input class="form-control" placeholder="Password" type="password">
                                </input>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Signin">
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
