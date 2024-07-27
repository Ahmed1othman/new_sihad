@extends('layouts.admin.master')
@section('name')
    {{trans('admin/testimonials.Edit_Testimonial')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <form action="{{route('Testimonials.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                       @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="row">
                            <div class="col">
                                <label class="mb-2">{{trans('admin/testimonials.Testimonial_name')}}</label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror" value="{{ $data->name }}">
                                @error('name')
                                <div class="alert alert-danger">{{$Message}}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="mb-2">{{ trans('admin/testimonials.Testimonial_feedback') }}</label>
                                <textarea class="form-control  @error('feedback') is-invalid @enderror" rows="5" name="feedback">{{$data->feedback}} </textarea>
                            </div>
                        </div>
                        <br>

                        <br>

                        <div class="row">
                            <div class="col-xl-9 mx-auto">
                                @if ($data->image)
                                    <a href="{{asset($data->image)}}" data-fancybox="group2">
                                        <img width="75px" height="75px" src="{{asset($data->image)}}" alt="{{$data->name}}" class="">
                                    </a>
                                @endif

                                    <br>
                                    <p class="text-danger">* {{trans('admin/testimonials.Attachments_are_of_image_type_only')}}</p>
                                    <h6 class="mb-0 text-uppercase">{{trans('admin/testimonials.Attachments')}}</h6>
                                <hr/>
                                <div class="card">
                                    <div class="card-body">
                                        <input id="image-uploadify" name="photo" type="file" accept="image/*">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked"
                                           {{$data->active==1?'checked':''}}>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">  {{trans('admin/testimonials.Edit_Testimonial')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
