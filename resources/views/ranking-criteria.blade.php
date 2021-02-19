@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section class="hero hero-other d-flex align-items-center" style="background-image: url('img/home/bg-other-right.svg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">
                    Marking Scheme &
                </h1>
                <h1 class="text-center">
                    Ranking Criteria
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
    <div class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            There will be total 45 questions in each olympiad.
                        </p>
                    </div>
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            Each Correct Question will fetch 3 marks to students & each incorrect answer will lead to deduction of 1 marks from the score.
                        </p>
                    </div>
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            Leaving a question blank is allowed & will not lead to any positive/negative marks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ranking-result">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="card p-3">
                        <h1>
                            +3
                        </h1>
                        <p>
                            Correct Answer
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h1>
                            -1
                        </h1>
                        <p>
                            Incorrect Answer
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h1>
                            0
                        </h1>
                        <p>
                            Not Attempted
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h1>
                            45
                        </h1>
                        <p>
                            Questions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <header class="section-header">
                <h2>
                    Ranking
                    <span>
                        Criteria
                    </span>
                </h2>
            </header>
            <div class="row">
                <div class="col-md-12">
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            The Ranks will be given on the basis of the total marks obtained in the exam.
                        </p>
                    </div>
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            In case of a tie, the students completing the test in a lower time frame will be awarded the higher rank for the prizes. However, the rank mentioned on the Merit Certificate/Certificate of Participation will be the tied rank only.
                        </p>
                    </div>
                    <div class="star-point">
                        <i class="ri-star-fill mr-2 text-warning">
                        </i>
                        <p class="heading-2 mt-0 ">
                            In case of a tie, in both the total marks & time frame, the younger student based on Date of Birth will be awarded the higher rank for the prizes. However, the rank mentioned on the Merit Certificate/Certificate of Participation will be the tied rank only.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
