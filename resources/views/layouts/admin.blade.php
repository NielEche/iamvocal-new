<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51772907-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51772907-1');
</script>

 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}Admin Dashboard</title>

        <link rel="apple-touch-icon" href="{{ asset('files/pages/ico/tedxphlogo.svg') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('files/pages/ico/tedxphlogo.svg') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('files/pages/ico/tedxphlogo.svg') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('files/pages/ico/tedxphlogo.svg') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('files/pages/ico/tedxphlogo.svg') }}" />
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        
        <link href="{{ asset('files/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/nvd3/nv.d3.min.css') }}/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
		<link href="{{ asset('files/plugins/jquery-metrojs/MetroJs.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">
		<link href="{{ asset('files/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<link href="{{ asset('files/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/bootstrap-tag/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
		<link href="{{ asset('files/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css" media="screen">
		<link href="{{ asset('files/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" media="screen">
		<link href="{{ asset('files/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" media="screen">
		<link href="{{ asset('files/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="{{ asset('files/pages/css/pages.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="{{ asset('files/pages/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link class="main-stylesheet" href="{{ asset('files/pages/css/custom.css') }}" rel="stylesheet" type="text/css" />
        

		<link href="{{ asset('files/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('files/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        @livewireStyles
    </head>
    <body class="fixed-header dashboard windows desktop pace-done sidebar-visible menu-pin">
            <!-- Page Heading -->
            @include('admin.partials.header')

            <!-- Page Content -->
            @yield('content')

			 <!-- Page Footer -->
			 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			 <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
			 <script type="text/javascript">

				var cTime = moment().format('dddd');
				var cDate = moment().format('MMMM Do YYYY');
				document.getElementById("ctime").innerHTML = cTime;
				document.getElementById("cdate").innerHTML = cDate;
			
			</script>
			<script>
				ClassicEditor
					.create( document.querySelector( '#editor' ) )
					.catch( error => {
						console.error( error );
					} );
			</script>
			<style>
				.ck-editor__editable_inline {
					min-height: 300px;
				}
				</style>
            @include('admin.partials.scripts')
    </body>
</html>
