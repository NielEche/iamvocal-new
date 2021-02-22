@extends('layouts.app')

@section('title')
Events
@endsection

@section('content')
@php( $events = \App\Models\Events::all() )

<section class="section section--singular bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section style="padding-bottom:0px;">
                    <header class="page-header mb-5">
                        <h1 class="page-title text-white"> Events</h1>
                    </header>
                    <div class="paragraph in-view in-view--in">
                        <div class="row in-view__child in-view__child--fadein in-view__child--in">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                               
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    @foreach($events as $key => $data)
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">{{ $data->event_theme}}
                                        </h5>
                                        <!--<p style="text-transform: uppercase;"
                                    class="eventText fw-10 mt-4 in-view__child in-view__child--fadein text-white">TEDxPH Main Event</p>-->
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding" href="{{"eventspeakers/".$data['id']}}">
                                        <img style="object-fit: cover; width:600px !important; height:100%;"
                                            src="{{ asset('uploads/events') }}/{{ $data->file_path }}"
                                            class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Back">
                                        <img style="object-fit: cover; width:600px !important; height:100%; "
                                            src="{{ asset('uploads/events') }}/{{ $data->file_path1 }}"
                                            class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Front">
                                       
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </a> 
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;"
                                    class="in-view__child in-view__child--fadein text-white">{{ \Carbon\Carbon::parse($data->date)->format('M d Y')}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section class="section section--singular bg-black pt-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section style="padding-bottom:0px;">
                    <header class="page-header mb-5">
                        <h1 class="page-title text-white">PREVIOUS EVENTS</h1>
                    </header>
                    <div class="paragraph in-view in-view--in">
                        <div class="row in-view__child in-view__child--fadein in-view__child--in">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">EVERYTHING
                                            MATTERS
                                        </h5>
                                        <p style="text-transform: uppercase;"
                                        class="eventText fw-10 mt-4 in-view__child in-view__child--fadein text-white">TEDXPH MAIN EVENT</p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding" href="{{ route('em') }}">
                                        <img style="object-fit: cover; width:600px !important; height:100%;"
                                            src="{{ asset('files/media/em.png') }}"
                                            class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Back">
                                        <img style="object-fit: cover; width:600px !important; height:100%; "
                                            src="{{ asset('files/media/slide1.jpg') }}"
                                            class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Front">
                                       
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </a> 
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;"
                                    class="in-view__child in-view__child--fadein text-white">November 16, 2019</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">THE STORY OF THE
                                        STORY
                                        </h5>
                                        <p style="text-transform: uppercase;"
                                        class="eventText fw-10 mt-4 in-view__child in-view__child--fadein text-white">TEDxPH Salon</p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding" href="{{ route('sots') }}">
                                        <img style="object-fit: cover; width:600px !important; height:100%;"
                                            src="{{ asset('files/media/storyots.png') }}"
                                            class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Back">
                                        <img style="object-fit: cover; width:600px !important; height:100%; "
                                            src="{{ asset('files/media/sot.jpg') }}"
                                            class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Front">
                                       
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </a> 
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;"
                                    class="in-view__child in-view__child--fadein text-white">OCTOBER 05, 2019</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">FULL CIRCLE
                                        </h5>
                                        <p style="text-transform: uppercase;"
                                        class="eventText fw-10 mt-4 in-view__child in-view__child--fadein text-white">TEDxPH Salon</p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding" href="{{ route('fc') }}">
                                        <img style="object-fit: cover; width:600px !important; height:100%;"
                                            src="{{ asset('files/media/fullcircle.png') }}"
                                            class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Back">
                                        <img style="object-fit: cover; width:600px !important; height:100%; "
                                            src="{{ asset('files/media/slidefc.jpg') }}"
                                            class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Front">
                                       
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </a> 
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;"
                                    class="in-view__child in-view__child--fadein text-white">NOVEMBER 29, 2018</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">REFRAME
                                        </h5>
                                        <p style="text-transform: uppercase;"
                                        class="eventText fw-10 mt-4 in-view__child in-view__child--fadein text-white">TEDXPH MAIN EVENT</p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding" href="{{ route('reframe') }}">
                                        <img style="object-fit: cover; width:600px !important; height:100%;"
                                            src="{{ asset('files/media/reframe.png') }}"
                                            class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Back">
                                        <img style="object-fit: cover; width:600px !important; height:100%; "
                                            src="{{ asset('files/media/slide6.jpg') }}"
                                            class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                            alt="Card Front">
                                       
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </a> 
                                    </div>
                                   
                                </div>

                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;"
                                    class="in-view__child in-view__child--fadein text-white">November 17, 2018</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->


@endsection

@section('footer')
@include('partials.footer')
@endsection
