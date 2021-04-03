@extends('layouts.app')
@section('ecss') 
 <style type="text/css">
     .award-list li{
       display: flex;
       flex-direction: row;
       justify-content: center;
       margin-top: 1rem;
       margin-bottom:3rem;
     }
     .award-list .award-icon{
        position: relative;
        bottom: 10px;
      }
     .award-list li span{
      font-size: 75px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.2;
      letter-spacing: normal;
      color: #3eaa6d;
      margin:0 10px;
     }.award-list li img{
        width: 55px;
        height: 55px;
        vertical-align: baseline;
     }
     .award-list li h3{
      font-size: 30px;
      font-weight: 500;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.2;
      letter-spacing: normal;
      text-align: left;
      color: #000;
      margin-left: 25px;
     }
     .award-note{
      font-size: 24px;
      font-weight: 500;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.17;
      letter-spacing: normal;
      text-align: left;
      color: #000;
      border-left: 20px solid #3eaa6d;
     }
     .register-form{
       position: inherit;
       bottom: 0;
     }
     .award-feature-list{
      margin: 1rem 0;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
     }
     .award-feature-list>div{
      padding: 15px;
      display: flex;
      flex-direction: row;
     }
     .award-feature-list>div>span{
      font-size: 60px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      letter-spacing: normal;
      text-align: left;
      color: #3eaa6d;
      display: inline-block;
      margin-right: 1rem;
      position: relative;bottom: 1rem;
     }
     .award-feature-list h3{
      font-size: 24px;
      font-weight: 500;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.29;
      letter-spacing: normal;
      text-align: left;
      color: #000;
      display: inline-block;
     }
 </style>
@endsection
@section('content')
<section class="hero hero-other d-flex align-items-center" style="background-image: url('img/home/bg-other.svg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">
                  Benefits For Schools
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
    <div class="py-5">
        <div class="container">
            <header class="section-header text-left">
                <h2 class="text-center">
                    Benefits For 
                    <span>
                        Schools
                    </span>
                </h2>
            </header>
            <div class="row award-feature-list">
                <div class="col-md-6">
                   <span>1</span>
                   <h3>Recognition on a National platform WeIntern, gaining huge visibility across the country.</h3>
                </div>
                <div class="col-md-6">
                   <span>2</span>
                   <h3>Platform to encourage practical application of knowledge in a healthy competitive environment.</h3>
                </div>
                <div class="col-md-6">
                   <span>3</span>
                   <h3>Best National School Awards Trophy & Citation for top 3 schools.</h3>
                </div>
                <div class="col-md-6">
                   <span>4</span>
                   <h3>Announcement of all prize holders along with their school name & logo on our official national platform WeIntern (over 5 Lakh unique visitors).</h3>
                </div>

                <div class="col-md-12">
                   <span>5</span>
                   <h3>Teachers and Principals felicitated by the Organisation in recognition of guiding students to perform well in the Olympiad and encouraging students to have maximum participation.(Min Student from that school required for it 30).</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <ul class="award-list mt-4">
                        <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>1</span></div>
                          <h3>Rs 50000 + Scholar trophies + <br />Sedal of excellence + Serit certificate</h3>
                       </li> 
                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>2</span></div>
                          <h3>Rs 10000 + scholar trophies + <br /> medal of excellence + merit certificate</h3>
                       </li>
                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>3 - 5</span></div>
                          <h3>Rs 5000 + scholar trophies +<br /> medal of excellence + merit certificate</h3>
                       </li>
                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>6 - 10</span></div>
                          <h3>Rs 2000 + scholar trophies + <br /> medal of excellence + merit certificate</h3>
                       </li>
                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>10 - 25</span></div>
                          <h3>Rs 1000 + scholar trophies + <br /> medal of excellence + merit certificate</h3>
                       </li>

                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>26 - 50</span></div>
                          <h3>Rs 500 + scholar trophies + <br /> medal of excellence + merit certificate</h3>
                       </li>

                       <li>
                          <div class="award-icon"><img src="{{ url('img/home/award.svg') }}" /><span>51 - 100</span></div>
                          <h3>medal of excellence + <br/> merit certificate State Level Prize List </h3>
                       </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 
    @include('includes.about-us')
    @include('includes.testimonials')
</main>
@stop
