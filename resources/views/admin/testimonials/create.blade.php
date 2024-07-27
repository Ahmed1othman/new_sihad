@extends('layouts.admin.master')
@section('name')
    {{trans('admin/testimonials.Add_new_Testimonial')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <form action="{{route('Testimonials.store')}}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col">
                                <label class="mb-2">{{trans('admin/testimonials.Testimonial_name')}}</label>
                                <input type="text" name="name"
                                       class="form-control  @error('name') is-invalid @enderror" required
                                       value="{{old('name')}}">
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label class="mb-2">{{trans('admin/testimonials.Testimonial_feedback')}}</label>
                                <textarea class="form-control @error('feedback') is-invalid @enderror" rows="5"
                                          name="feedback" required> {{old('feedback')}} </textarea>
                                @error('feedback')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <br>

                        <div class="row">
                            <div class="col-xl-9 mx-auto">
                                <p class="text-danger">
                                    * {{trans('admin/testimonials.Attachments_are_of_image_type_only')}}</p>
                                <h6 class="mb-0 text-uppercase">{{trans('admin/testimonials.Attachments')}}</h6>
                                <hr/>
                                <div class="card">
                                    <div class="card-body">
                                        <input id="image-uploadify" name="photo" type="file" accept="image/*" required>
                                    </div>
                                    @error('photo')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="active" value="1" type="checkbox"
                                           id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">{{trans('admin/testimonials.Add_new_Testimonial')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
