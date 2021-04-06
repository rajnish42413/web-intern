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
                @foreach ($olympiads as $olympiad)
                  <div class="col-md-12">
                      <div class="list-exam @if (auth()->user()->isBuyedandNotExpired($olympiad->id)) active @endif">
                          <div class="badge-info-right white">{{ \Carbon\Carbon::parse($olympiad->exam_at)->format('d-M-Y')}}</div>
                          <h3>{{ $olympiad->full_name }} ({{ $olympiad->abbr }})</h3>
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@stop
