<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
{{--    <meta name="description" content="شركة الالصيهد للمقاولات العامة واعمال العزل" />--}}
{{--    <meta name="keywords" content="مؤسسة الصيهد,مؤسسة الصيهد للمقاولات العامة والعزل الحديث,مؤسسة الصيهد العوازل,مؤسسة الصيهد للمقاولات,مؤسسة الصيهد للمقاولات العامة والعزل الحديث,العزل الحديث,العزل الحراري,العزل المائي,عزل مائي حراري,عزل خزانات اسطح,عزل خزانات,عزل اسطح,عزل حمامات,عزل فوم,عزل حديث,عوازل,شركة العازل,شركة للعوازل,شركة عزل بالرياض,عزل لفائف بيتومين,عزل ايبوكسي ,Al-Sihad construction,مقاول عزل,مقاولات الرياض,افضل شركة عوازل,فوم,عزل فوم,افضل اسعار عزل الحوائط,افضل الاسعار,عزل فوري,تواصل سريع,افضل انواع الفوم,افضل انواع العزل,عزل حوائط واسقف,عوازل" />--}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="">
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}

    @include('layouts.website.header')


</head>
<body class="animsition" style="font-family: 'Cairo', sans-serif;">
    @include('layouts.website.navbar')
    @yield('content')

    @include('layouts.website.contact_buttons.whatsapp')
    @include('layouts.website.contact_buttons.call')
    @include('layouts.website.footer')
    @include('layouts.website.footer-script')
</body>

</html>
