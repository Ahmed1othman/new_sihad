<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-security-policy"
          content="default-src 'none'; script-src 'self';
  connect-src 'self'; img-src 'self';
  style-src 'self' 'sha256-CwE3Bg0VYQOIdNAkbB/Btdkhul49qZuwgNCMPgNY5zw=';" />
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
