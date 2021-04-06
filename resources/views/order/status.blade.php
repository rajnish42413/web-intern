@extends('layouts.app-raw')

@section('ecss')

@endsection

@section('content')
<div class="container py-5 mb-5 align-items-center justify-content-center">
    <header class="section-header text-center">
        {{-- //success --}}
        @if ($data['status'] == "success")
        <div class="text-center">
            <svg id="Capa_1" style="enable-background:new 0 0 50 50;width: 100px;height: 100px" version="1.1" viewbox="0 0 50 50" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                <circle cx="25" cy="25" r="25" style="fill:#25AE88;">
                </circle>
                <polyline points="  38,15 22,33 12,25 " style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;">
                </polyline>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </svg>
        </div>
         <h2 class="text-center">
            Payment Successfully Completed
        </h2>
        @endif

         @if ($data['status'] == "error")
        <div class="text-center">
            <svg id="Capa_1" style="enable-background:new 0 0 455.111 455.111;width: 100px;height: 100px" version="1.1" viewbox="0 0 455.111 455.111" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                <circle cx="227.556" cy="227.556" r="227.556" style="fill:#E24C4B;">
                </circle>
                <path d="M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333  c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222  C422.4,91.022,455.111,155.022,455.111,227.556z" style="fill:#D1403F;">
                </path>
                <path d="M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533  c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533  c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533  c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533  C339.911,308.622,339.911,322.844,331.378,331.378z" style="fill:#FFFFFF;">
                </path>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </svg>
        </div>
         <h2 class="text-center">
            Payment Failed
        </h2>
        @endif
        <p class="text-left text-muted text-center">
            {{ $data['message'] }}
        </p>
        <a href="/" class="btn btn-primary my-4">Go to Home</a>
        
    </header>
</div>
@endsection
