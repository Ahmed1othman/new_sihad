@extends('layouts.website1.master')
@section('title')
   {{__('site/app.projects_details')}}
@endsection
@section('content')

<!-- Inner Banner -->
<div class="inner-banner" style="background-image: url({{asset('storage/front/'.websiteInfo_hlp('projects_background_image'))}});">
   <div class="container">
       <div class="inner-title text-center">
           <h3>{{__('site/app.projects')}}</h3>
           <ul>
               <li>
                   <a href="{{route('home')}}">{{__('site/app.home')}}</a>
               </li>
               <li>
                   <i class='bx bxs-chevrons-left'></i>
               </li>
               <li>{{__('site/app.project_detials')}}</li>
           </ul>
       </div>
   </div>
</div>
<!-- Inner Banner End -->


<div class="blog-dtls ptb-100">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="blog-dtls-content">
                   <div class="blog-dtls-img">
                       <img src="{{asset($row->image)}}" alt="Blog Images">
                   </div>
                   <div class="blog-text">
                       <h2>{{$row->title}}</h2>
                       <p>
                           {!!$row->notes!!}
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
