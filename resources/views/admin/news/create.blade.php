@extends('layouts.admin.master')
@section('title')
{{trans('admin/news.Add_new_news')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-body">
                <form action="{{route('news.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf


                    <div class="row">

                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.new_name')}}</label>
                            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" required value="{{old('title')}}">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.new_name_ar')}}</label>
                            <input type="text" name="title_ar" class="form-control  @error('title_ar') is-invalid @enderror" required value="{{old('title_ar')}}">
                            @error('title_ar')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>

                    <br>


                    <div class="row">
                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.new_content')}}</label>
                            <textarea class="form-control ckeditor @error('content') is-invalid @enderror ckeditor" rows="5" name="content" required> {{old('content')}} </textarea>
                            @error('content')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.new_content_ar')}}</label>
                            <textarea class="form-control ckeditor @error('content_ar') is-invalid @enderror ckeditor" rows="5" name="content_ar" required> {{old('content_ar')}} </textarea>
                            @error('content_ar')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <p class="text-danger">* {{trans('admin/news.Attachments_are_of_image_type_only')}}</p>
                            <h6 class="mb-0 text-uppercase">{{trans('admin/news.Attachments')}}</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">
                                    <input id="image-uploadify" name="photo" type="file" accept="image/*" required>
                                </div>
                            </div>
                        </div>

                    </div>



                    <br>
                    <div class="row">

                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.tag')}}</label>
                            <input type="text" name="tags" class="form-control  @error('tag') is-invalid @enderror" required value="{{old('tag')}}">
                            @error('tag')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label class="mb-2">{{trans('admin/news.tag_ar')}}</label>
                            <input type="text" name="tags_ar" class="form-control  @error('tag_ar') is-invalid @enderror" required value="{{old('tag_ar')}}">
                            @error('tag_ar')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success"> {{trans('admin/news.Add_new_news')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
