@extends('layouts.website1.master')
@section('title')
    {{__('site/app.contact_us')}}
@endsection
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{__('site/app.contact_us')}}</h3>
                    <ul>
                        <li>
                            <a href="index.html">{{__('site/app.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-left'></i>
                        </li>
                        <li>{{__('site/app.contact_us')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        
        <!-- Contact Area -->
        <div class="contact-area pt-100 pb-70">
            <div class="container contact-width">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class='flaticon-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:{{websiteInfo_hlp('phone')}}">
                                        {{websiteInfo_hlp('phone')}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-paper-plane"></i>
                            <ul>
                                <li>
                                    <a href="mailto:{{websiteInfo_hlp('email')}}">{{websiteInfo_hlp('email')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="contact-card">
                            <i class='flaticon-pin'></i>
                            <ul>
                                <li>
                                    {{websiteInfo_hlp('address')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->
        
        <!-- Contact Section -->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>{{__('site/app.contact_us')}}</span>
                    <h2>{{websiteInfo_hlp('contact_us_title')}}</h2>
                    <p>
                        {{websiteInfo_hlp('contact_us_paragrph_'.App::getLocale())}}
                    </p>
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                        <form id="contact-form" name="contact">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="contact_name" name="name" placeholder="{{ __('site/app.your_name') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" type="text" id="contact_email" name="email" placeholder="{{ __('site/app.your_email') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="contact_phone" name="phone" placeholder="{{ __('site/app.your_number') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="msg" id="contact_msg" placeholder="{{ __('site/app.your_message') }}" class="form-control" cols="30" rows="8"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="button" onclick="submitContactUs()" class="default-btn page-btn text-center">
                                        {{ __('site/app.send_email') }}
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
@endsection
