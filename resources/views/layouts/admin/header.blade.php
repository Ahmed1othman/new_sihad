<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<link href="{{asset('admin_dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
@if (app()->getLocale()=='ar')<link href="{{ asset('admin_dashboard/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin_dashboard/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin_dashboard/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
<!-- loader-->
<link href="{{ asset('admin_dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assets/css/pace.min.css') }}" rel="stylesheet" />
<script src="{{ asset('admin_dashboard/assets/js/pace.min.js')}}"></script>
<!-- Bootstrap CSS -->
<link href="{{ asset('admin_dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin_dashboard/assets/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('admin_dashboard/assets/css/icons.css') }}" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{ asset('admin_dashboard/assets/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_dashboard/assets/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_dashboard/assets/css/header-colors.css') }}" />
@else
<link href="{{ asset('admin_dashboard/assetsEn/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin_dashboard/assetsEn/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin_dashboard/assetsEn/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet">

<link href="{{ asset('admin_dashboard/assetsEn/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin_dashboard/assetsEn/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
<!-- loader-->
<link href="{{ asset('admin_dashboard/assetsEn/css/pace.min.css') }}" rel="stylesheet" />
<script src="{{ asset('admin_dashboard/assetsEn/js/pace.min.js')}}"></script>
<!-- Bootstrap CSS -->
<link href="{{ asset('admin_dashboard/assetsEn/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="{{ asset('admin_dashboard/assetsEn/css/app.css') }}" rel="stylesheet">

<link href="{{ asset('admin_dashboard/assetsEn/css/icons.css') }}" rel="stylesheet">
<!-- Theme Style CSS -->

<link rel="stylesheet" href="{{ asset('admin_dashboard/assetsEn/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_dashboard/assetsEn/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_dashboard/assetsEn/css/header-colors.css') }}" />
@endif
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet" />
<style>
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #ffffff;
        background: #2196f3;
        padding: 2px 7px;
        border-radius: 3px;
    }
    .bootstrap-tagsinput {
        width: 100%;
        padding: 0.450rem 0.80rem;
    }

    .tp-bgimg{
        filter: blur(2px) brightness(0.8);
    }
    .t1-b-1 {
        font-family: Cairo;
    }

    .form-group {
        position: relative;
    }

    .form-control-placeholder {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #aaa;
        pointer-events: none;
        transition: all 0.2s;
    }

    .form-control:not(:placeholder-shown) + .form-control-placeholder,
    .form-control:focus + .form-control-placeholder {
        opacity: 0;
        visibility: hidden;
    }

</style>


<link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/coloris.min.css')}}">


<script src="{{asset('assets/ckeditor4/ckeditor/ckeditor.js')}}"></script>
<script>
    function ckeditor(){
        CKEDITOR.replace( '.ckeditor',{

        } );
        CKEDITOR.add
    }
    ckeditor()

</script>
