@extends('layouts.website1.master')
@section('content')
    <!-- Main Banner -->
    <div class="main-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <span>{{websiteInfo_hlp('header_first_title_'.app()->getLocale())}}</span>
                        <h1>{{websiteInfo_hlp('header_second_title_'.app()->getLocale())}}</h1>
                        <p>
                            {{websiteInfo_hlp('header_pragraph_'.app()->getLocale())}}
                        </p>

                        <div class="banner-btn">
                            <a href="{{route('contactus')}}" class="default-btn">{{__('site/app.contact_us')}}</a>
                            <a href="{{route('aboutus')}}" class="default-btn active">{{__('site/app.about_us')}}</a>
                            <a href="{{ route('offer-price')}}" class="default-btn active">{{ __('site/app.offer-price') }}</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img">
                       <img src="{{asset('storage/front/'.websiteInfo_hlp('header_image'))}}" style="width: 650px;height: 600px; border-radius: 50%"alt="Banner Images">
                    </div>
                </div>
                <div class="banner-shape-1">
                   <img src="{{asset('website1/img/shape/home1.png')}}" alt="Banner Shape">
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
               <img src="{{asset('website1/img/shape/1.png')}}" alt="shape">
            </div>
            <div class="shape2">
               <img src="{{asset('website1/img/shape/2.png')}}" alt="shape">
            </div>
            <div class="shape3">
               <img src="{{asset('website1/img/shape/3.png')}}" alt="shape">
            </div>
            <div class="shape4">
               <img src="{{asset('website1/img/shape/4.png')}}" alt="shape">
            </div>
            <div class="shape5">
               <img src="{{asset('website1/img/shape/5.png')}}" alt="shape">
            </div>
            <div class="shape6">
               <img src="{{asset('website1/img/shape/6.png')}}" alt="shape">
            </div>
            <div class="shape7">
               <img src="{{asset('website1/img/shape/3.png')}}" alt="shape">
            </div>
        </div>
    </div>
    <!-- Main Banner End -->

    {{-- <!-- Brand Area -->
    <div class="brand-area brand-bg ptb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <a href="#">
                       <img src="{{asset('website1/img/brand/1.png')}}" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                       <img src="{{asset('website1/img/brand/2.png')}}" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                       <img src="{{asset('website1/img/brand/3.png')}}" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                       <img src="{{asset('website1/img/brand/4.png')}}" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                       <img src="{{asset('website1/img/brand/5.png')}}" alt="Brand Images">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End --> --}}

    <!-- About Area -->
    <div id="About_Us {{ showSection_hlp('about_us') }}" class="about-area brand-bg pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6 ps-0">
                    <div class="about-img">
                       <img src="{{asset('storage/front/'.websiteInfo_hlp('about_image'))}}" alt="About Images">
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span>{{__('site/app.about_us')}}</span>
                        <h2>{{websiteInfo_hlp('about_title_'.app()->getLocale())}}</h2>
                        <div>
                            {{ \Illuminate\Support\Str::limit(websiteInfo_hlp('about_pragraph_'.app()->getLocale()),1000,"...")}}
                        </div>
                        <div class="about-btn">
                            <a href="#" class="default-btn">{{__('site/app.Know More')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
           <img src="{{asset('website1/img/shape/right-side.png')}}" alt="Shape Images">
        </div>
    </div>
    <!-- About Area End -->

    <!-- Service Area -->
    <section class="service-area pb-70 pt-70 {{ showSection_hlp('services') }}">
        <div class="container">
            <div class="section-title text-center">
                <span>{{__('site/app.our_services')}}</span>
                <h2>{{websiteInfo_hlp('service_title_'.app()->getLocale())}}</h2>
                <p>
                    {{ \Illuminate\Support\Str::limit(websiteInfo_hlp('service_pragraph_'.app()->getLocale()),1000,"...")}}
                </p>
            </div>
            <div class="row pt-45">
            @foreach($services as $service)
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="{{route('service.details',$service->id)}}">
                           <img src="{{asset($service->image)}}" alt="Images" style="max-height: 150px; max-width: 150px; border-radius: 10%">
                        </a>
                        <a href="{{route('service.details',$service->id)}}">
                            <h3>{{$service->title}}</h3>
                        </a>
                        <p>
                            {{Str::limit($service->notes,200,'...')}}
                        </p>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- projects Area -->
    <section class="portfolio-area pt-100 pb-70 {{ showSection_hlp('projects') }}">
        <div class="container">
            <div class="section-title text-center">
                <span>{{__('site/app.projects')}}</span>
                <h2>{{websiteInfo_hlp('project_title_'.app()->getLocale())}}</h2>
                <p>
                    {{websiteInfo_hlp('service_pragraph_'.app()->getLocale())}}
                </p>
            </div>
            <div class="portfolio-slider pt-45 owl-carousel owl-rtl owl-theme">
                @foreach($projects as $project)
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="{{route('project.details',$project->id)}}" >
                           <img src="{{asset($project->image)}}" style="width: 510px;height: 445px;" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="{{route('project.details',$project->id)}}"><span>{{__('site/app.read_more')}}</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="{{route('project.details',$project->id)}}"><h3>{{$project->title}}</h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- projects Area End -->

    <!-- Submission Area -->
    <div class="submission-area ptb-100 {{ showSection_hlp('subscritoin') }}">
        <div class="container">
            <div class="submission-title">
                <h2>{{websiteInfo_hlp('subscribe_title_'.app()->getLocale())}}</h2>
            </div>
            <form class="submission-form">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <input disabled type="text" class="form-control" id="website" placeholder="{{__('site/app.enter_your_mail')}}">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="form-group border-line">
                            <input type="text" class="form-control" name="email" id="subemail" placeholder="email@example.com" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                        <button onclick="submitSubscription()" type="button" class="default-btn">
                            {{__('site/app.Subscribe')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Submission Area End -->

    <!-- Counter Area -->
    <div class="counter-area pt-100 pb-70 {{ showSection_hlp('statistics') }}">
        <div class="container">
            <div class="row">
                @if(websiteInfo_hlp('experiance_years'))
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-success'></i>
                            <h3><span class="counter">{{websiteInfo_hlp('experiance_years')}}</span>+</h3>
                            <p>{{trans('site/app.experiance_years')}}</p>
                        </div>
                    </div>
                @endif

                @if(websiteInfo_hlp('projects_number'))
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-launch'></i>
                            <h3><span class="counter">{{websiteInfo_hlp('projects_number')}}</span>+</h3>
                            <p>{{trans('site/app.projects_number')}}</p>
                        </div>
                    </div>
                @endif

                @if(websiteInfo_hlp('clients_number'))
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-customer'></i>
                            <h3><span class="counter">{{websiteInfo_hlp('clients_number')}}</span>+</h3>
                            <p>{{trans('site/app.clients_number')}}</p>
                        </div>
                    </div>
                @endif

                @if(websiteInfo_hlp('employees_number'))
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-team-building'></i>
                            <h3><span class="counter">{{websiteInfo_hlp('employees_number')}}</span>+</h3>
                            <p>{{trans('site/app.employees_number')}}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Counter Area End -->

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-100 pb-70 {{ showSection_hlp('testimonials') }}">
        <div class="container-fluid">
            <div class="section-title text-center">
                <span>{{trans('site/app.our_clients_feedback')}}</span>
                <h2>{{websiteInfo_hlp('testimonial_title_'.app()->getLocale())}}
                </h2>
                <p>
                    {{websiteInfo_hlp('testimonial_pragraph_'.app()->getLocale())}}
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 col-xxl-6">
                    <div class="testimonial-slider">
                        <div class="testimonial-icon">
                            <i class='bx bxs-quote-alt-right'></i>
                        </div>

                        <div class="testimonial-item-slider owl-carousel owl-theme">
                            @foreach ($testimonials as $testimonial)
                            <div class="testimonial-item">
                                <div class="testimonial-item-img">
                                   <img src="{{asset($testimonial->image)}}" style="width: 100px;height: 100px;" alt="Testimonial Images">
                                </div>
                                <h3>{{$testimonial->name}}</h3>
                                <p>
                                    {{$testimonial->feedback}}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xxl-6">
                    <div class="testimonial-img">
                       <img src="{{asset('website1/img/testimonial/1.png')}}" alt="Testimonial Images">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-left">
           <img src="{{asset('website1/img/testimonial/shape-left.png')}}" alt="Images">
        </div>
        <div class="shape-right">
           <img src="{{asset('website1/img/testimonial/shape-right.png')}}" alt="Images">
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Blog Area -->
    <div class="blog-area pb-70 {{ showSection_hlp('news') }}">
        <div class="container">
            <div class="section-title text-center">
                <span>{{trans('site/app.our_news_offers')}}</span>
                <h2>{{websiteInfo_hlp('news_posts_title_'.app()->getLocale())}}</h2>
                <p>
                    {{websiteInfo_hlp('news_posts_pragraph_'.app()->getLocale())}}
                </p>
            </div>
            <div class="row pt-45">
                @foreach ($news as $new)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                               <img src="{{asset($new->image)}}" alt="Blog Images" style="height: 415px; width: 510px">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span>{{$new->tags}}</span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3>{{$new->title}}</h3>
                            </a>
                            <a href="blog-details.html" class="read-btn">{{__('site/app.read_more')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Footer Area -->
@endsection
