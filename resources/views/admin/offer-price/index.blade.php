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

{{--                                <th><i class="fa fa-whatsapp"--}}
{{--                                       style="font-size: 24px; /* Adjust the size as needed */--}}
{{--                                           color: #25D366; /* WhatsApp green color */--}}
{{--                                           transition: color 0.3s ease, transform 0.3s ease;"--}}
{{--                                       onmouseover="this.style.color='#128C7E'; this.style.transform='scale(1.1)';"--}}
{{--                                       onmouseout="this.style.color='#25D366'; this.style.transform='scale(1)';">--}}
{{--                                    </i></th>--}}
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
{{--                                <td>--}}
{{--                                    <a href="https://wa.me/{{$row->phone_number}}?text={{ urlencode(' اهلا بيك يا '.$row->name.' بنتواصل معاك للرد علي طلب عرض سعر بشأن '.$row->required_service) }}" style="background-color: #25D366; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;" target="_blank">--}}
{{--                                        <i class="fa fa-whatsapp"--}}
{{--                                           style="font-size: 24px; /* Adjust the size as needed */--}}
{{--                                           color: #25D366; /* WhatsApp green color */--}}
{{--                                           transition: color 0.3s ease, transform 0.3s ease;"--}}
{{--                                           onmouseover="this.style.color='#128C7E'; this.style.transform='scale(1.1)';"--}}
{{--                                           onmouseout="this.style.color='#25D366'; this.style.transform='scale(1)';">--}}
{{--                                        </i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
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
