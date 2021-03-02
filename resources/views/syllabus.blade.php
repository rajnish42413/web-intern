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

    @foreach ($subjects as $subject)
         <div class="my-5 syllabus">
             <div class="container">
                 <header class="section-header text-left">
                     <h2 class="text-left text-capitalize w-75">
                        {{ $subject->full_name }}
                         <span>
                             ({{ $subject->abbr }})
                         </span>
                     </h2>
                 </header>
                 <div class="row syllabus-card">
                    @foreach ($standards as $std)
                        <a class="card" data-target="#myModal-{{$subject->id}}-{{$std->id}}" data-toggle="modal" href="#">
                         <h2 class="text-capitalize">
                             {{$std->name}}th
                         </h2>
                        </a>

                        <div class="modal fade" id="myModal-{{$subject->id}}-{{$std->id}}">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body p-5">
                                        <header class="section-header text-left mb-2 pb-0">
                                            <h2 class="text-left text-capitalize w-75">
                                                {{ $subject->full_name }}
                                                <span>
                                                    ({{ $subject->abbr }})
                                                </span>
                                            </h2>
                                            <h3 class="text-theme my-3 text-capitalize">
                                               {{$std->name}}th
                                            </h3>
                                            <h3 class="heading-3">
                                                Topic to be covered
                                            </h3>
                                        </header>
                                        <div class="w-100">
                                            <div class="row justify-content-center syllabus-list">

                                                @if ($std->syllabuses)
                                                  @foreach ($std->syllabuses as $key => $sy)
                                                  <div class="col-md-6">
                                                     <h5 class="underline">{{$key + 1 }}. {{ $sy->name }}</h5>
                                                  </div>
                                                 @endforeach
                                                @endif
                                                

                                                

                                               {{--  <div class="col-md-5">
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
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                 </div>
             </div>
         </div>
    @endforeach
</main>
@stop