@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section class="hero hero-other d-flex align-items-center" style="background-image: url('img/home/bg-other-right.svg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">
                    Syllabus
                </h1>
            </div>
            <div class="col-md-12 text-center justify-content-center">
                <div class="ranking">
                    <h2>
                        First of its kind in India - The
                        <br/>
                        Only Summer Olympiad
                    </h2>
                    <div class="h-border">
                    </div>
                    <h2>
                        <span class="year">
                            2021-22
                        </span>
                        <span class="text-left">
                            Academic
                            <br>
                                Year
                            </br>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <div class="my-5 syllabus">
        <div class="container">
            <header class="section-header text-left">
                <h2 class="text-left">
                    WeIntern National Mathematics
                    <br/>
                    Olympiad
                    <span>
                        (WNMO)
                    </span>
                </h2>
            </header>
            <div class="row syllabus-card">
                @for ($i = 2; $i < 12; $i++)
                <a class="card" data-target="#myModal" data-toggle="modal" href="#">
                    <h2>
                        Class {{$i}}th
                    </h2>
                </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="my-5 syllabus">
        <div class="container">
            <header class="section-header text-left">
                <h2 class="text-left">
                    WeIntern National English
                    <br/>
                    Olympiad
                    <span>
                        (WNEO)
                    </span>
                </h2>
            </header>
            <div class="row syllabus-card">
                @for ($i = 2; $i < 12; $i++)
                <a class="card" data-target="#myModal" data-toggle="modal" href="#">
                    <h2>
                        Class {{$i}}th
                    </h2>
                </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="my-5 syllabus">
        <div class="container">
            <header class="section-header text-left">
                <h2 class="text-left">
                    WeIntern National Science
                    <br/>
                    Olympiad
                    <span>
                        (WNSO)
                    </span>
                </h2>
            </header>
            <div class="row syllabus-card">
                @for ($i = 2; $i < 12; $i++)
                <a class="card" data-target="#myModal" data-toggle="modal" href="#">
                    <h2>
                        Class {{$i}}th
                    </h2>
                </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="my-5 syllabus">
        <div class="container">
            <header class="section-header text-left">
                <h2 class="text-left">
                    WeIntern National Cyber
                    <br/>
                    Olympiad
                    <span>
                        (WNCO)
                    </span>
                </h2>
            </header>
            <div class="row syllabus-card">
                @for ($i = 2; $i < 12; $i++)
                <a class="card" data-target="#myModal" data-toggle="modal" href="#">
                    <h2>
                        Class {{$i}}th
                    </h2>
                </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                {{--
                <button class="close" data-dismiss="modal" type="button">
                    ×
                </button>
                --}}
                <!-- Modal body -->
                <div class="modal-body p-5">
                    <header class="section-header text-left mb-2 pb-0">
                        <h2 class="text-left">
                            WeIntern National Cyber
                            <br/>
                            Olympiad
                            <span>
                                (WNCO)
                            </span>
                        </h2>
                        <h3 class="text-theme my-3">
                            Class 2nd
                        </h3>
                        <h3 class="heading-3">
                            Topic to be covered
                        </h3>
                    </header>
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <ol class="syllabus-list">
                                    @for ($i = 0; $i < 10 ; $i++)
                                    <li class="underline heading-3">
                                        Topic number one of class secod
                                    </li>
                                    @endfor
                                </ol>
                            </div>
                            <div class="col-md-1 hidden-md-down align-content-between justify-content-center">
                                <div class="divider-v-4">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <ol class="syllabus-list">
                                    @for ($i = 0; $i < 10 ; $i++)
                                    <li class="underline heading-3">
                                        Topic number one of class secod
                                    </li>
                                    @endfor
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
