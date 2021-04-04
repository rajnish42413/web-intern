<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    WebIntern
                </title>
                <meta charset="utf-8" />
                <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
                <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
                @yield('ecss')
            </meta>
        </meta>
    </head>
    <body>
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url()->previous() }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: #fff;
                              }

                              .cls-1, .cls-2 {
                                stroke: #000;
                              }

                              .cls-2, .cls-4 {
                                fill: none;
                              }

                              .cls-2 {
                                stroke-linecap: round;
                                stroke-linejoin: round;
                              }

                              .cls-3 {
                                stroke: none;
                              }
                            </style>
                          </defs>
                          <g id="Group_811" data-name="Group 811" transform="translate(-115 -118)">
                            <g id="Ellipse_1648" data-name="Ellipse 1648" class="cls-1" transform="translate(115 118)">
                              <circle class="cls-3" cx="26.5" cy="26.5" r="26.5"/>
                              <circle class="cls-4" cx="26.5" cy="26.5" r="26"/>
                            </g>
                            <path id="Path_6231" data-name="Path 6231" class="cls-2" d="M1353.953,5946.773,1343.727,5957l10.226,10.226" transform="translate(-1209.147 -5812.526)"/>
                          </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @yield('content')
        @include('includes.footer')
        <a class="back-to-top d-flex align-items-center justify-content-center" href="#">
            <i class="bi bi-arrow-up-short">
            </i>
        </a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
        </script>
        <script src="{{ asset('js/main.js') }}">
        </script>
        @yield('script')
    </body>
</html>