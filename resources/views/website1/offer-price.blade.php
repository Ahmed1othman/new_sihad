@extends('layouts.website1.master')
@section('title')
    {{__('site/app.offer-price')}}
@endsection
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6" style="background-image: url({{asset('storage/front/'.websiteInfo_hlp('offer_price_background_image'))}});">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{__('site/app.offer_price')}}</h3>
                    <ul>
                        <li>
                            <a href="index.html">{{__('site/app.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-left'></i>
                        </li>
                        <li>{{__('site/app.offer_price')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        <!-- Social Media start-->
        <div class="social-media-container">
            <div class="website-name">
                <a href="{{ route('home') }}" class="website-link">
                    <h2>{{ websiteInfo_hlp('website_name_' . app()->getLocale()) }}</h2>
                </a>
            </div>
            <div class="social-icons">
                <a href="{{ websiteInfo_hlp('fb_link') }}" class="social-icon fb">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="{{ websiteInfo_hlp('twitter_link') }}" class="social-icon twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="{{ websiteInfo_hlp('instagram_link') }}" class="social-icon instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="{{ websiteInfo_hlp('linked_link') }}" class="social-icon linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="{{ websiteInfo_hlp('snapchat_link') }}" class="social-icon snapchat">
                    <i class="fa fa-snapchat-ghost"></i>
                </a>
            </div>
        </div>

        <!-- offer_price Section -->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>{{__('site/app.offer_price')}}</span>
                    <h2>{{websiteInfo_hlp('offer_price_title')}}</h2>
                    <p>
                        {{websiteInfo_hlp('offer_price_paragraph_'.App::getLocale())}}
                    </p>
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                        <form id="offer-price-form" name="offer-price">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="offer_price_name" name="name" placeholder="{{ __('site/app.your_name') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="offer_price_phone_number" name="phone_number" placeholder="{{ __('site/app.your_number') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <select id="offer_price_required_service" name="required_service" class="form-control">
                                            <option value="">{{ __('site/app.required_service') }}</option>
                                            <option value="عزل أسطح المباني">عزل أسطح المباني</option>
                                            <option value="عزل أسطح المنزل">عزل أسطح المنزل</option>
                                            <option value="عزل أسطح المرافق">عزل أسطح المرافق</option>
                                            <option value="عزل الحمامات">عزل الحمامات</option>
                                            <option value="عزل مطابخ ضد المياه">عزل مطابخ ضد المياه</option>
                                            <option value="عزل جدران المطبخ">عزل جدران المطبخ</option>
                                            <option value="اخري">اخري</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="number" id="offer_price_required_meters" name="required_meters" placeholder="{{ __('site/app.required_meters') }}" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group position-relative">
                                        <input type="date" id="offer_price_required_date" name="required_date" class="form-control">
                                        <span id="date-placeholder" class="form-control-placeholder">{{ __('site/app.required_date') }}</span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="details" id="offer_price_details" placeholder="{{ __('site/app.service_details') }}" class="form-control" cols="30" rows="8"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="button" onclick="submit_offer_price()" class="default-btn page-btn text-center">
                                        {{ __('site/app.order_offer_price') }}
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
