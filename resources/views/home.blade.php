@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section class="hero d-flex align-items-center" id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">
                    WeIntern Summer Olympiad 2021
                </h1>
                <h2 data-aos="fade-up" data-aos-delay="400">
                    WeIntern Summer Olympiad will be India’s 1st Summer Olympiad for classes 2nd to 11th. The olympiad will be
                </h2>
                <div>
                    <a class="btn-get-started" data-aos="fade-up" data-aos-delay="500" href="{{ url('register/student') }}">
                        Sign Up Now
                    </a>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img alt="" class="img-fluid" src="{{ url('img/home/banner-img-study.svg') }}">
                </img>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section>
        <div class="container">
            <header class="section-header">
                <h2>
                    India’s 1st
                    <span>
                        Summer Olympiad
                    </span>
                </h2>
                <p>
                    WeIntern Summer Olympiad will be India’s 1st Summer Olympiad for classes 2nd to 12th. The olympiad will be based on previous years curriculum that the student would have completed in their 2021 curriculum. WeIntern Summer Olympiad will focus on assessing students practical & concept application, thinking ability & reasoning skills.
                </p>
            </header>
            <div class="row justify-content-center">
                <div class="col-md-10 about-list">
                    <ul>
                        <li class="label">
                            For Classes
                        </li>
                        <li class="value">
                            Class 2nd-12th
                        </li>
                    </ul>
                    <ul>
                        <li class="label">
                            Syllabus
                        </li>
                        <li class="value">
                            Previous Year’s Curriculum
                        </li>
                    </ul>
                    <ul>
                        <li class="label">
                            Focus of the Olympiad
                        </li>
                        <li class="value">
                            <p>
                                1) Assessing Students Practical & Concept Application
                            </p>
                            <p>
                                2) Assessing Students Thinking Ability
                            </p>
                            <p>
                                3) Assessing Students Reasoning Skills
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5 justify-content-center about-services">
                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img alt="" class="img-fluid" src="img/icons/fee.svg">
                            <h3>
                                Exam Date & Fee Structure
                            </h3>
                            <div class="divider-100">
                            </div>
                            <p>
                                Fees per olympiad & group packages as well as dates of every olympiad.
                            </p>
                            <a href="{{ url('exam-information') }}">
                                Read More >
                            </a>
                        </img>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img alt="" class="img-fluid" src="img/icons/award.svg">
                            <h3>
                                Awards & Recognition
                            </h3>
                            <div class="divider-100">
                            </div>
                            <p>
                                Cash Prizes, Goodies & Electronics, Trophies, Medals & Merit Certificates etc. will be awarded to Top 50% Students in each olympiads.
                            </p>
                            <a href="{{ url('awards-and-recognition') }}">
                                Read More >
                            </a>
                        </img>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img alt="" class="img-fluid" src="img/icons/ranking.svg">
                            <h3>
                                Marking Scheme & Ranking Criteria
                            </h3>
                            <div class="divider-100">
                            </div>
                            <p>
                                No. of questions in every olympiad & marks for every correct & incorrect answer.
                            </p>
                            <a href="{{ url('ranking-criteria') }}">
                                Read More >
                            </a>
                        </img>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img alt="" class="img-fluid" src="img/icons/syllabus.svg">
                            <h3>
                                Syllabus
                            </h3>
                            <div class="divider-100">
                            </div>
                            <p>
                                The syllabus for every olympiad based on last year’s curriculum.
                            </p>
                            <a href="{{ url('syllabus') }}">
                                Read More >
                            </a>
                        </img>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img alt="" class="img-fluid" src="img/icons/guidelines.svg">
                            <h3>
                                Guidelines
                            </h3>
                            <div class="divider-100">
                            </div>
                            <p>
                                Guidelines for all olympiad takers to read before starting the exam.
                            </p>
                            <a href="{{ url('benefits-for-schools') }}">
                                Read More >
                            </a>
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.qa')
    @include('includes.about-us')
    @include('includes.testimonials')
</main>
@endsection


@section("script")
<script type="text/javascript">
  $(document).ready(function(){
          // Add minus icon for collapse element which is open by default
          $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
          });
          
          // Toggle plus minus icon on show hide of collapse element
          $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
          }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
          });
      });
</script>
@endsection