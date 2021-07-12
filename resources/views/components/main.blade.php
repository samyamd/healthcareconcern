<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="{{url()->full()}}">
    <title>@yield('title')</title>
    @yield('meta')
    <meta name="twitter:site" content="@samyamdw" />
    <meta property="og:locale" content="en-GB">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="@lang('messages.name')">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{asset('assets/images/logo.png')}}">
    
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" /> --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script async defer src="{{mix('js/app.js')}}"></script>
    @yield('head')
</head>

<body>
    {{-- <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GMKT7T" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> --}}
    <div class="loader">
        <div id="loader">
            <div class="spinner-border text-success" role="status" style="height: 80px; width: 80px">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <main id="main">
        @include('components.header')
        @yield('body')
        @include('components.footer')
    </main>
    @yield('script')
</body>

</html>