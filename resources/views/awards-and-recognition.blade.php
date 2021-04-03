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
 </style>
@endsection
@section('content')
<section class="hero hero-other d-flex align-items-center" style="background-image: url('img/home/bg-other.svg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">
                  Awards & Recognition
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
                    Awards 
                    <span>
                        & Recognition
                    </span>
                </h2>
            </header>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <ul class="award-list">
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
                <div class="col-md-10 award-note bg-gray p-5">
                    <p>Special Merit Plaque & Scholar Trophies to top 3 students from each state.</p>
                     <p>Excellence in School Trophy & Certificate to top 1 student from each school with more than 30 participants in the Olympiad</p>
                </div>

                <div class="col-md-12 my-5">
                   <div class="register-form">
                       <header class="section-header text-left w-50">
                           <h2 class="text-left">
                               Individual Register for
                               <span>
                                   WeIntern Olympiads
                               </span>
                           </h2>
                           <p class="text-left">
                               Fill the form and our representative will contact you within 24 working hours.
                           </p>
                       </header>
                       <form action="{{ route('register') }}" method="POST">
                           @csrf
                           <input name="type" type="hidden" value="student">
                           <div class="row">
                               <div class="form-group col-md-12">
                                   <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Student Name" type="name" value="{{ old('name') }}">
                                       @error('name')
                                       <span class="invalid-feedback small" role="alert">
                                           <strong>
                                               {{ $message }}
                                           </strong>
                                       </span>
                                       @enderror
                                   </input>
                               </div>

                               <div class="form-group col-md-6">
                                   <input class="form-control @error('school') is-invalid @enderror" name="school" placeholder="School Name" type="name" value="{{ old('school') }}">
                                       @error('school')
                                       <span class="invalid-feedback small" role="alert">
                                           <strong>
                                               {{ $message }}
                                           </strong>
                                       </span>
                                       @enderror
                                   </input>
                               </div>

                               <div class="form-group col-md-6">
                                   <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email ID" type="email" value="{{ old('email') }}">
                                       @error('email')
                                       <span class="invalid-feedback small" role="alert">
                                           <strong>
                                               {{ $message }}
                                           </strong>
                                       </span>
                                       @enderror
                                   </input>
                               </div>
                               <div class="form-group col-md-6">
                                   <input class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Mobile Number" type="number" maxlength="10" value="{{ old('phone') }}">
                                       @error('phone')
                                       <span class="invalid-feedback small" role="alert">
                                           <strong>
                                               {{ $message }}
                                           </strong>
                                       </span>
                                       @enderror
                                   </input>
                               </div>
                               <div class="form-group col-md-6">
                                   <select class="form-control" name="standard">
                                       <option>
                                           Select Class
                                       </option>
                                       @for ($i = 2; $i <= 12; $i++)
                                       <option value="{{$i}}">
                                           class {{$i}}th
                                       </option>
                                       @endfor
                                   </select>
                               </div>
                            </div>
                               <button class="btn btn-primary btn-block mt-5" type="submit">
                                   Register Now
                               </button>
                           </input>
                       </form>
                   </div>

                </div>
            </div>
        </div>
    </div>
 
    @include('includes.about-us')
    @include('includes.testimonials')
</main>
@stop
