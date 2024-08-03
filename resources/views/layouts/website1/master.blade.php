<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    @include('layouts.website1.header')


</head>
<body>
<!-- Start Preloader -->
<div class="preloader">
    <div class="preloader-wave"></div>
</div>
<!-- End Preloader -->
@include('layouts.website1.navbar')
@yield('content')

@include('layouts.website.contact_buttons.whatsapp')
@include('layouts.website.contact_buttons.call')
@include('layouts.website1.footer')
@include('layouts.website1.footer-script')
</body>

</html>
