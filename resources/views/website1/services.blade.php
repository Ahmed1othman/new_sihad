@extends('layouts.website1.master')
@section('title')
    {{__('site/app.services')}}
@endsection
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner" style="background-image: url({{asset('storage/front/'.websiteInfo_hlp('services_background_image'))}});">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{__('site/app.services')}}</h3>
                <ul>
                    <li>
                        <a href="{{route('home')}}">{{__('site/app.home')}}</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-left'></i>
                    </li>
                    <li>{{__('site/app.services')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Service Area -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="scetion-title text-center">
                <span>{{__('site/app.our_services')}}</span>
                <h2>{{websiteInfo_hlp('service_title_'.App::getLocale())}}</h2>
                <p>
                    {{websiteInfo_hlp('service_pragraph_'.App::getLocale())}}
                </p>
            </div>
            <div class="row pt-45">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="{{route('service.details',$service->id)}}">
                                <img src="{{asset($service->image)}}" alt="Images" style="height: 200px;width: 300px; border-radius: 10px">
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


                {!! $services->links() !!}
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
