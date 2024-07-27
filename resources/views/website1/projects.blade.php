@extends('layouts.website1.master')
@section('title')
    {{__('site/app.projects')}}
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
                    <li>{{__('site/app.projects')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- project Area -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="scetion-title text-center">
                <span>{{__('site/app.our_projects')}}</span>
                <h2>{{websiteInfo_hlp('project_title_'.App::getLocale())}}</h2>
                <p>
                    {{websiteInfo_hlp('project_pragraph_'.App::getLocale())}}
                </p>
            </div>
            <div class="row pt-45">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="{{route('project.details',$project->id)}}">
                                <img src="{{asset($project->image)}}" alt="Images" style="height: 200px;width: 300px; border-radius: 10px">
                            </a>
                            <a href="{{route('project.details',$project->id)}}">
                                <h3>{{$project->title}}</h3>
                            </a>
                            <p>
                                {!! Str::limit($project->notes,200,'...') !!}
                            </p>
                        </div>
                    </div>
                @endforeach


                {!! $projects->links() !!}
            </div>
        </div>
    </section>
    <!-- project Area End -->
@endsection
