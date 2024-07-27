@extends('layouts.website1.master')
@section('title')
    {{__('site/app.our_news_offers')}}
@endsection

@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner" style="background-image: url({{asset('storage/front/'.websiteInfo_hlp('news_posts_background_image'))}});">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{__('site/app.our_news_offers')}}</h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">{{__('site/app.home')}}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-left'></i>
                        </li>
                        <li>{{__('site/app.our_news_offers')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

                <!-- Blog Area -->
                <div class="blog-area pt-100 pb-70">
                    <div class="container">
                        <div class="scetion-title text-center">
                            <span>{{__('site/app.news_posts')}}</span>
                            <h2>{{websiteInfo_hlp('news_posts_title_'.App::getLocale())}}</h2>
                            <p>
                                {{websiteInfo_hlp('news_posts_pragraph_'.App::getLocale())}}
                            </p>
                        </div>
                        <div class="row pt-45" id="paginateDiv">

                            @foreach ($news as $new)
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <a href="{{ route('news.details',$new->id) }}">
                                                <img src="{{asset($new->image)}}" style="height: 415px; width: 510" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-tag">
                                                <a href="#"><span>{{$new->tags}}</span></a>
                                            </div>
                                            <a href="{{ route('news.details',$new->id) }}">
                                                <h3>{{$new->title}}</h3>
                                            </a>
                                            <a href="{{route('news.details',$new->id)}}" class="read-btn">{{__('site/app.read_more')}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {!! $news->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->





@endsection

