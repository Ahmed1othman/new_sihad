@extends('layouts.admin.master')
@section('title')
    {{__('admin/app.subscriptions')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')

        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin/app.phone_number') }}</th>
                                <th>{{ __('admin/app.name') }}</th>
                                <th>{{ __('admin/app.required_service') }}</th>
                                <th>{{ __('admin/app.required_meters') }}</th>
                                <th>{{ __('admin/app.required_date') }}</th>
                                <th>{{ __('admin/app.details') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->phone_number}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->required_service}}</td>
                                <td>{{$row->required_meters}}</td>
                                <td>{{$row->required_date}}</td>
                                <td>{{$row->details}}</td>
                                <td>

                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" onclick="delete_alert({{$row->id}},'admin-offer-price')" ><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                              @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
