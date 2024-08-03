{{--<div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.70230284269!2d46.662416715000425!3d24.737098584112296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x837cee8dce08f3a1!2zMjTCsDQ0JzEzLjYiTiA0NsKwMzknNTIuNiJF!5e0!3m2!1sen!2seg!4v1660079021243!5m2!1sen!2seg" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--</div>--}}


<footer id="footer" class="footer-area bg-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            @if (websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo'))
                                <img style="border-radius: 10%; max-width: 110px; max-height: 60px" src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}"
                                    alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}">
                            @else
                                <div class="one">
                                    <h1>{{websiteInfo_hlp('website_name_'.App::getLocale())}}</h1>
                                </div>
                            @endif
                            <p>
                                {{websiteInfo_hlp('footer_pragraph_'.App::getLocale())}}
                            </p>
                        </div>

                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="{{__('site/app.your_email')}}" name="email" required autocomplete="off">
                                <button  onclick="submitSubscription()" class="subscribe-btn" type="submit">
                                    {{__('site/app.Subscribe')}}
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-50">
                        <h3>{{ __('site/app.services') }}</h3>
                        <ul>
                            @foreach ( $services as $Service )
                                <li>
                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="{{route('service.details',$service->id)}}">{{$Service->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3>{{ __('site/app.Quick Links') }}</h3>
                        <ul>
                            @foreach (navbar_hlp() as $item)
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route($item->route) }}">
                                    {{ __('site/app.'.$item->title) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3>{{trans('site/app.contact_us')}}</h3>
                        <ul>
                            @if(websiteInfo_hlp('phone'))
                                <li>
                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="tel:{{websiteInfo_hlp('phone')}}">{{websiteInfo_hlp('phone')}}</a>
                                </li>
                            @endif

                            @if(websiteInfo_hlp('email'))
                                <li>
                                    <i class='bx bxs-chevron-right'>{{websiteInfo_hlp('email')}}</i>
                                    <a href="mailto:{{websiteInfo_hlp('email')}}"></a>
                                </li>
                            @endif

                            @if(websiteInfo_hlp('address'))
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                {{websiteInfo_hlp('address')}}
                            </li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bottom-text text-center">
                        <p>
                            {{-- جميع الحقوق محفوظة لمؤسسة الصيهد للمقاولات واعمال العزل ©{{date('Y')}} --}}
                            @if(App::getLocale()=='en')
                Copyright @ {{ date('Y') }} For <span class="h5"><a href="{{route('home')}}">{{websiteInfo_hlp('website_name_en')}}</a> </span>. All rights reserved.
                @else
                    جميع الحقوق محفوظة لـ <span class="h5"><a href="{{route('home')}}">{{websiteInfo_hlp('website_name_ar')}}</a> </span> © {{date('Y')}}
                @endif

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
