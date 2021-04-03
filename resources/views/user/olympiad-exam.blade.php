@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    OLYMPIAD EXAM
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
                        Olympiad Exam
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
                Your Olympiad Exam
            </h3>
            <p class="text-muted mt-2">
               The Olympiad Exam will be conducted on the following dates:
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="list-exam active">
                        <div class="badge-info-right white">2nd June 2021</div>
                        <h3>WeIntern National Mathematics Olympiad (WNMO)</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="list-exam">
                        <div class="badge-info-right">4th June 2021</div>
                        <h3>WeIntern National English Olympiad (WNEO)</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="list-exam">
                        <div class="badge-info-right">6th June 2021</div>
                        <h3>WeIntern National Science Olympiad (WNSO)</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="list-exam">
                        <div class="badge-info-right">8th June 2021</div>
                        <h3>WeIntern National General Knowledge Olympiad (WNGKO)</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
