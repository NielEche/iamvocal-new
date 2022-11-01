@extends('layouts.app')

@section('title')
About Us
@endsection

@section('content')
@php( $tedxphteams = \App\Models\tedxphteams::orderBy('serial_id', 'asc')->get() )
@php( $aboutus = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '1')->get() )
@php( $approach = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '2')->get() )
@php( $mission = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '3')->get() )
@php( $ourvision = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '4')->get() )

<section class="section section--singular2 video">
    <div class="container-fluid">
        <div class="row">
            <div class="embed-responsive ">
                <img src="{{ asset('files/media/aboutmain.jpg') }}" class="d-block w-100" alt="Image">
            </div>
        </div>
    </div>

    <!--<video controls poster="assets/media/group.jpg" style="width: 100%;" height="auto">
        <source src="assets/media/aboutvid.mp4" type="video/mp4">
    </video>-->
</section>


<section class="section section--singular pt-5" id="ourstory" style=" !important;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        @foreach($aboutus as $key => $data)
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">{{ $data->header }}</h2>
                                <h5 class="page-subtitle fw-12 "><span>About Us...</span></h5>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    {!! $data->details !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        @foreach($approach as $key => $data)
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">{!! $data->header !!}</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    {!! $data->details !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "><br>

                <div class="paragraph in-view in-view--in">
                    <div class="row in-view__child in-view__child--fadein in-view__child--in">
                        @foreach($mission as $key => $data)
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive"> {!! $data->header !!}</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class=" in-view__child in-view__child--fadein in-view__child--in"> {!! $data->details !!}</p>
                            </div>
                        </div>
                        @endforeach
                        @foreach($ourvision as $key => $data)
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">{!! $data->header !!}</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class="in-view__child in-view__child--fadein in-view__child--in">{!! $data->details !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="parallax2" id="details">
    <div class="container pb-4">
        <header id="team" class="text-center pt-5">
            <h4 class="title text-white pt-3"><span>Our Board Members</span></h4>
        </header>
        <br>
        <div class="container abtTedxph">
            <p class="text-center fw-bold text-white" style="line-height:20px;">The board comprises of passionate
                individuals in
                diverse fields with a zest
                for
                promoting social welfare,
                equality and civic justice in the society.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($tedxphteams as $key => $data)
            @include('partials.modals.team-bio')
           
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="speaker-neat">
                    <div class="speaker-neat__image poster in-view">
                        <figure><a data-toggle="modal" data-target="#teamBio{{ $data->id }}"
                                style="cursor:pointer; border:0px !important; background:none !important;" type="submit"
                                name="speaker_details_btn">
                                <img class="lazyload--el lazyload in-view__child"
                                    src="{{ asset('uploads/team') }}/{{ $data->file_path }}" alt="" width="445"
                                    height="600">
                                <div class="poster--cover in-view in-view__child"></div>
                            </a>
                        </figure>
                    </div>
                    <div class="speaker-neat__copy in-view">
                        <h5 style="text-transform:uppercase;" class="in-view__child in-view__child--fadein text-white">
                            {{ $data->name }}
                        </h5>
                        <!--<p style="text-transform:uppercase;" class="in-view__child in-view__child--fadein">
                            {{ $data->position }}
                        </p>-->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('footer')
@include('partials.footer')
@endsection
