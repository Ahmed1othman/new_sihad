@extends('layouts.admin.master')
@section('name')
{{trans('admin/testimonials.Archive_Testimonials')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-header">
                <p class="h5 text-primary"> {{trans('admin/testimonials.Archive_Testimonials')}}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/testimonials.name')}}</th>
                                <th>{{trans('admin/testimonials.feedback')}}</th>
                                <th>{{trans('admin/testimonials.active')}}</th>
                                <th>{{trans('admin/testimonials.photo')}}</th>
                                <th>{{trans('admin/testimonials.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Testimonials as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->feedback}}</td>
                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success"
                                        aria-hidden="true"></i>':'<i class="bx bx-error text-danger"
                                        aria-hidden="true"></i>'!!}</td>
                                <td>
                                    @if ($row->image)
                                    <a href="{{asset($row->image)}}" data-fancybox="group2">
                                        <img width="75px" height="75px" src="{{asset($row->image)}}"
                                            alt="{{$row->name}}" class="">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                                        onclick="reset_alert({{$row->id}},'Testimonials')"><i
                                            class="bx bx-refresh"></i></button>

                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                        onclick="delete_alert({{$row->id}},'Testimonials')"><i
                                            class="bx bx-trash"></i></button>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
