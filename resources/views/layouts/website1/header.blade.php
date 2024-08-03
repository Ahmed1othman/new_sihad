
@if (app()->getLocale()=='en')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/bootstrap.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/owl.carousel.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/magnific-popup.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/animate.min.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/fonts/flaticon.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/meanmenu.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('website1/ltr/css/responsive.css')}}">
@else
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/bootstrap.min.css')}}">
    <!-- Owl Carousel CSS -->

    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/bootstrap.rtl.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/owl.carousel.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/magnific-popup.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/animate.min.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/fonts/flaticon.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/meanmenu.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/responsive.css')}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('website1/rtl/css/rtl.css')}}">

    <style>
        .bxs-chevron-right:before {
            content: "\eceb";
        }

        .main-nav nav .navbar-nav .nav-item a:hover i {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
    </style>
@endif


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="{{ asset('admin_dashboard/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
    .hide-secttion{
        display: none;
    }
</style>


<link href="{{ websiteInfo_hlp('font_url') }}" rel="stylesheet">

<style>
    @keyframes loader08 {
        0%,
        100% {
            box-shadow: -13px 20px 0 {{ websiteInfo_hlp('main_color') }}, 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        25% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 {{ websiteInfo_hlp('main_color') }}, 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        50% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 {{ websiteInfo_hlp('main_color') }}, -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        75% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 {{ websiteInfo_hlp('main_color') }};
        }
    }


    /************************************************/
    /*main color*/
    /**************************************************/
    .btn-back-to-top,
    .top-bar,
    #rev_slider_3 .btn2:hover,
    #rev_slider_3 .btn1:hover,
    #rev_slider_2 .btn2:hover,
    #rev_slider_2 .btn1:hover,
    #rev_slider_1 .btn2:hover,
    #rev_slider_1 .btn1:hover,
    .swal-button:hover,
    .swal-button:active,
    .table_head,
    .bg-10,
    .kit-overlay2::before,
    .kit-overlay1::before,
    .hov-bg10:hover,
    .hov-btn1:hover

    {
        background-color: {{ websiteInfo_hlp('main_color') }};
    }

    .menu-mobile .main-menu>li>a:hover,
    .cl-10,
    .hov-cl10:hover,
    .hov-link1:hover
    {
        color: {{ websiteInfo_hlp('main_font_color') }};
    }

    .bcl-10,
    .hov-btn1:hover
    {
        border-color: {{ websiteInfo_hlp('main_color') }};
    }

    .kit-underline1::after{
        border-left: 70px solid {{ websiteInfo_hlp('main_color') }};
    }

    /************************************************/
    /*secondary color*/
    /**************************************************/
    .menu-desktop .main-menu>li:hover>a,
    .menu-mobile .sub-menu a:hover,
    .rs2-select2 .select2-container--default .select2-selection--single .select2-selection__arrow::after,
    .tab02 .nav-link.active,
    .tab02 .nav-link:hover,
    a.breadcrumb-item,
    .btn-num-product-up,
    .btn-num-product-down,
    .cl-11,
    .kit-symbol1::before,
    .hov-link2:hover,
    .hov-link3:hover,
    .hov-btn2:hover,
    .hov-btn3:hover,
    .hov-3:hover
    {
        color: {{ websiteInfo_hlp('secondary_font_color') }};
    }

    .menu-desktop .sub-menu li:hover,
    .menu-mobile .main-menu,
    #rev_slider_3 .btn1,
    #rev_slider_2 .btn1,
    #rev_slider_1 .btn1,
    .rs1-select2 .select2-container .select2-results__option--highlighted[aria-selected],
    .wrap-slick2 .dots-slick li.slick-active div,
    .wrap-slick1 .dots-slick li.slick-active div,
    .wrap-slick2 .dots-slick li:hover div,
    .wrap-slick1 .dots-slick li:hover div,
    .rs1-slick2.wrap-slick2 .dots-slick li.slick-active div,
    .rs1-slick2.wrap-slick2 .dots-slick li:hover div,
    .swal-button,
    .progress-inner,
    .progress-inner::before,
    .progress-inner::after,
    .pagi-item:hover,
    .pagi-item.active-pagi,
    .block1:hover,
    .bg-11
    {
        background-color: {{ websiteInfo_hlp('secondary_color') }};
    }

    .rs2-select2 .select2-container .select2-selection--single,
    .rs2-select2 .select2-container--open .select2-dropdown,
    .pagi-item,
    .wrap-num-product
    {
        border: 1px solid {{ websiteInfo_hlp('secondary_color') }};
    }

    .tab02 .nav-link.active {
        border-left: 2px solid {{ websiteInfo_hlp('secondary_color') }};
    }

    .pagi-item:hover,
    .pagi-item.active-pagi,
    .block1:hover,
    .bcl-11,
    .hov-btn3:hover,
    .hov-3:hover,
    .focus-in1:focus,
    .focus-in1:focus,
    .focus-in1:focus,
    .active-1,
    .active-2
    {
        border-color: {{ websiteInfo_hlp('secondary_color') }};
    }

    .cart-content {
        border-top: 3px solid {{ websiteInfo_hlp('secondary_color') }};
    }


    body{
        font-family: {!! websiteInfo_hlp('font_family') !!};
    }



</style>
