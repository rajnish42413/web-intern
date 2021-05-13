@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    MOCK TESTS
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
                        Mock Tests
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
                Select Your Olympiad
            </h3>
            {{-- <p class="text-muted mt-2">
                Lorem Ipsum dolor sitor orem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitororem Ipsum dolor sitorore
            </p> --}}
            <ul class="list-order">
               @foreach ($olympiads as $olympiad)
               @php
                 $active = false;
                   if (auth()->user()->isBuyedandNotExpired($olympiad->id)){
                    $active = true;
                  }
               @endphp
                  {{-- <div class="col-md-12">
                      <div class="list-exam @if (auth()->user()->isBuyedandNotExpired($olympiad->id)) active @endif">
                          <div class="badge-info-right white">{{ \Carbon\Carbon::parse($olympiad->exam_at)->format('d-M-Y')}}</div>
                          <h3>{{ $olympiad->full_name }} ({{ $olympiad->abbr }})</h3>
                      </div>
                  </div> --}}
                  <li class="list-item @if ($active) active @endif" buyed="@if ($active) true @else false @endif">
                    {{ $olympiad->full_name }} ({{ $olympiad->abbr }})
                  </li>
                @endforeach
            </ul>
           
            <div class="mt-5"></div>
            <h3>
                Take Mock Test
            </h3>
            <p class="text-muted mt-2" id="mock-text-subheading">
                
            </p>
            <div class="row mt-2" id="mock-test-content">
                <div class="col-md-2">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 01
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 02
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card p-3 border border-secondary text-center">
                      Mock Test 03
                    </div>
                </div>
            </div>
            <div class="row d-none" id="buy-section">
                <div class="col-md-5">
                    <div class=" bg-gray p-5">
                     <h3 class="mb-4">Personalize your preparation by buying our <br />
                        official Mock Test Package</h3>
                     <a class="btn btn-primary" href="{{ url('packages') }}">Buy Now</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script') 
 <script type="text/javascript">
     $subHeading = $("#mock-text-subheading");
     $mockTextContent = $("#mock-test-content");
     $buyNow = $("#buy-section");

      function setSubHeading(title) {
       $subHeading.html(title.trim());
      }

      function resetActive() {
        $(".list-order li").removeClass("active");
      }

      $('.list-item').click(function(){
         $isBuyed = $(this).attr('buyed');
          if($isBuyed.trim() == 'false'){
             $mockTextContent.addClass("d-none");
             $buyNow.removeClass("d-none");
          }else {
             $mockTextContent.removeClass("d-none");
             $buyNow.addClass("d-none");
          }
          resetActive();
          $(this).addClass("active");
          setSubHeading($(this).text());
      });
      setSubHeading("WeIntern National Mathematics Olympiad (WNMO)");
 </script>
@endsection
