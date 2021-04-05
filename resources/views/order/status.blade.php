@extends('layouts.app-raw')

@section('ecss')

@endsection

@section('content')
<div class="container py-4 mb-5">
    <header class="section-header text-center w-75">
      {{-- //success --}}
       <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" style="width:100%;height:100%"><defs><clipPath id="a"><path d="M0 0h500v500H0z"/></clipPath></defs><g clip-path="url(#a)"><path stroke-linecap="round" stroke-linejoin="round" stroke="#121331" stroke-width="12.6" d="M101.402 189.976C93.906 208.514 89.779 228.775 89.779 250c0 88.488 71.733 160.221 160.221 160.221S410.221 338.488 410.221 250c0 0 0 0 0 0 0-88.488-71.733-160.221-160.221-160.221-67.263 0-124.845 41.448-148.598 100.197" fill="none" display="block"/><path stroke-linecap="round" stroke-linejoin="round" stroke="#08A88A" stroke-width="12.271700000000001" d="M154.165 263.413c28.632 28.523 57.364 56.45 57.364 56.45s96.88-89.983 140.378-135.504c.19-.201.38-.402.564-.604" fill="none" display="block"/></g></svg>
       </div>
       
      {{-- error --}}
       <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" style="width:100%;height:100%"><defs><clipPath id="a"><path d="M0 0h500v500H0z"/></clipPath><clipPath id="b"><path d="M0 0h500v500H0z"/></clipPath></defs><g clip-path="url(#a)"><path stroke-linecap="round" stroke-linejoin="round" stroke="#121331" stroke-width="12.6" d="M370.916 355.123c24.482-28.135 39.305-64.898 39.305-105.123 0 0 0 0 0 0 0-48.263-21.339-91.542-55.098-120.916M144.877 370.916c28.135 24.482 64.898 39.305 105.123 39.305 0 0 0 0 0 0 48.263 0 91.542-21.339 120.916-55.098M129.084 144.877C104.602 173.012 89.779 209.775 89.779 250c0 0 0 0 0 0 0 48.263 21.339 91.542 55.098 120.916M355.123 129.084C326.988 104.602 290.225 89.779 250 89.779c0 0 0 0 0 0-48.263 0-91.542 21.339-120.916 55.098" fill="none" display="block"/><g clip-path="url(#b)" display="block"><path stroke-linecap="round" stroke-linejoin="round" stroke="#08A88A" stroke-width="13.613600000000002" d="M318.221 318.79c-.396-.37-.785-.748-1.17-1.133L181.726 182.332c-.24-.24-.475-.479-.71-.722" fill="none" display="block"/><path stroke-linecap="round" stroke-linejoin="round" stroke="#08A88A" stroke-width="13.613600000000002" d="M321.326 180.57c-.374.397-.756.79-1.145 1.179L183.948 317.982c-.24.24-.483.479-.726.714" fill="none" display="block"/></g></g></svg>
       </div>

        <h2 class="text-center">
            Payment Status
        </h2>
        <p class="text-left text-muted text-center">
            Complete your payment with Debit/ Credit Card, UPI, Paytm etc.
        </p>
    </header>
</div>
@endsection