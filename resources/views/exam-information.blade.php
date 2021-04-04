@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section class="hero hero-other d-flex align-items-center" style="background-image: url('img/home/bg-other.svg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">
                   Exam Date & Fee Structure
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
            <header class="section-header">
                <h2>
                    Exam Information
                    <span>
                        Information
                    </span>
                </h2>
                <p>With so many Olympiad exams around, you should read the <br /> following before you offer these exams to your students</p>
            </header>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table exam-table">
                        <thead>
                            <tr>
                                <th>Olympiad Name</th>
                                <th>Olympiad Date</th>
                                <th>Answer Key Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">WeIntern National Mathematics Olympiad (WNMO)</td>
                                <td>20th April 2021</td>
                                <td rowspan="4">3 May 2021</td>
                            </tr>
                            <tr>
                                <td class="text-left">WeIntern National English Olympiad (WNEO)</td>
                                <td>22th April 2021</td>
                            </tr>
                            <tr>
                                <td class="text-left">WeIntern National Science Olympiad (WNSO)</td>
                                <td>24th April 2021</td>
                            </tr>
                            <tr>
                                <td class="text-left">WeIntern National Science Olympiad (WNSO)</td>
                                <td>26th April 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-center mt-5 mb-2">
                    <a href="{{ url('packages') }}" class="btn btn-primary w-25 ny-3 ">Buy Now </a>
                </div>
            </div>
        </div>
    </div>
 
   
 <div class="my-5">
     <div class="container">
         <header class="section-header">
            <h2>Fee <span> Structure </span></h2>
            <p>With so many Olympiad exams around, you should read the following before you offer these exams to your students</p>
         </header>
         <div class="row">
             <div class="col-md-12 table-responsive">
                 <table class="table exam-table">
                     <thead>
                         <tr>
                             <th>Olympiad Name</th>
                             <th>Olympiad Fees</th>
                             <th>Mock Tests Fees</th>
                             <th>Combined Package <br/>(Olympiad + Mock Test)</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td class="text-left">WeIntern National Mathematics Olympiad (WNMO)</td>
                             <td rowspan="4">
                                <div class="mh">
                                  <h2 class="text-theme font-weight-bold">₹250/-</h2>
                                  <h3 class="header-3">For Classes 2-11</h3>
                                  <p class="text-muted">Olympiad Registration</p>
                                </div>
                             </td>
                              <td rowspan="4">
                                <div class="mh">
                                 <h2 class="text-theme font-weight-bold">₹250/-</h2>
                                 <h3 class="header-3">For 03 Mock Tests</h3>
                                </div>
                             </td>
                              <td>
                                <h2 class="text-theme font-weight-bold">₹400/-</h2>
                                <h3 class="header-3">For 1 Olympiad + 3 Mock Tests</h3>
                                <a href="{{ url('packages') }}" class="text-theme underline">Buy Now</a>
                             </td>
                         </tr>
                         <tr>
                             <td class="text-left">WeIntern National English Olympiad (WNEO)</td>
                              <td>
                                <h2 class="text-theme font-weight-bold">₹800/-</h2>
                                <h3 class="header-3">For 4 Olympiad</h3>
                                 <a href="{{ url('packages') }}" class="text-theme underline">Buy Now</a>
                             </td>
                         </tr>
                         <tr>
                             <td class="text-left">WeIntern National Science Olympiad (WNSO)</td>
                             <td rowspan="2">
                                <h2 class="text-theme font-weight-bold">₹1400/-</h2>
                                <h3 class="header-3">For 4 Olympiad + 4 Mock Tests</h3>
                                 <a href="{{ url('packages') }}" class="text-theme underline">Buy Now</a>
                             </td>
                         </tr>
                         <tr>
                             <td class="text-left">WeIntern National Science Olympiad (WNSO)</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>

 <section>
     <div class="container">
        <header class="section-header">
           <h2>Important  <span> Notes. </span></h2>
        </header>
         <div class="row">
             <div class="col-12">
                <div class="card border-0 bg-gray p-5">
                    <p>1. Registration Confirmation Email will be received by all participants as soon as they pay the registration fees.</p>

                    <p>2. Identity Confirmation Phone Call will be conducted within 14 days of registration on the registered mobile number.</p>

                    <p>3. Mock Tests will be available from March 1, 2021 on the WeIntern portal itself. Registered students can login to the dashboard & access the same.</p>

                    <p>4. The Students have to appear for the exam as per the time slot selected by them. The  time slots selection will be accessible from March 1 - April 1.</p>

                    <p>5. In Mock Tests, only the total score will be available & no rankings will be published.</p>

                    <p>6. In Mock Tests, the correct answer & their detailed explanation will be available.</p>

                    <p>7. The final answer key of all the olympiads will be available from May 1, 2021.</p>

                    <p>8. The above schedule is tentative and may change under exceptional circumstances.</p>
                </div>
             </div>
         </div>
     </div>
 </section>

</main>
