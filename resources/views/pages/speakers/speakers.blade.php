@extends('layouts.app')

@section('title')
Speaker Details
@endsection

@section('content')

<section class="section section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                            <img class="w-100 lazyload--el lazyload in-view__child"
                                src="{{ asset('uploads/speakers') }}/{{ $speakers->file_path }}"
                                alt="{{$speakers['name']}}" style="height:400px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="mypanel pb-3">

                        <ul style="padding:0px !important;">
                            <li style="list-style:none;">
                                <div class="board board--left">

                                </div>
                            </li>
                            <li style="list-style:none;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">
                                            <h2 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                {{$speakers['name']}}
                                            </h2>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Venue: {{$speakers['venue']}}
                                            </h6>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Date: {{ \Carbon\Carbon::parse($speakers->date)->format('M d Y')}}
                                            </h6>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Time: {{$speakers['time']}}
                                            </h6>
                                            <p style="text-transform: uppercase;"
                                                class="sub-head dashed in-view__child in-view__child--fadein text-black">
                                                {{$speakers['occupation']}}
                                            </p>
                                            <p style="margin-left:0px;"
                                                class="indent in-view__child in-view__child--fadein text-black">
                                                {{$speakers['bio']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="row bg-blue">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
                            <div class="in-view">

                                <div
                                    class="m-0 member__name member__name1 in-view__child in-view__child--fadein in-view__child--in js-video-lead">
                                    <img style="object-fit: cover;  width:525px; height:296px;"
                                        src="{{ asset('files/media/iamv.jpg') }}" alt="" width="525px " height="296px">
                                    <div style="position:relative; overflow:hidden; margin-bottom:0px;"
                                        class=' newvideo member__name1 in-view__child in-view__child--fadein in-view__child--in'>
                                        <iframe width="525" height="296" src="{{ $speakers->embed }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>

                                    </div>
                                </div>

                            </div>
                            <script>
                                function video_lead_play_state(element, active) {
                                    var $active = $(element).closest(
                                        ".js-video-lead").find(
                                        ".btn-play-active");
                                    var $default = $(element).closest(
                                        ".js-video-lead").find(
                                        ".btn-play-default");

                                    if (active) {
                                        $active.show();
                                        $default.hide();
                                    } else {
                                        $active.hide();
                                        $default.show();
                                    }
                                }


                                $(document).ready(function () {
                                    // hide the videos and show the images
                                    var $videos = $(
                                        ".js-video-lead iframe");
                                    $videos.hide();
                                    $(".js-video-lead > img").not(
                                        ".btn-play").show();

                                    // position the video holders
                                    $(".js-video-lead").css("position",
                                        "relative");

                                    // prevent autoplay on load and add the play button
                                    $videos.each(function (index, video) {
                                        var $video = $(video);

                                        // prevent autoplay due to normal navigation
                                        var url = $video.attr(
                                            "src");
                                        if (url.indexOf(
                                                "&autoplay") > -1) {
                                            url = url.replace(
                                                "&autoplay=1",
                                                "");
                                        } else {
                                            url = url.replace(
                                                "?autoplay=1",
                                                "");
                                        }
                                        $video.attr("src", url)
                                            .removeClass(
                                                "js-video-lead-autoplay"
                                            );

                                        // add and position the play button
                                        var top = parseInt(
                                            parseFloat($video
                                                .css("height")
                                            ) / 2) - 15;
                                        var left = parseInt(
                                            parseFloat($video
                                                .css("width")) /
                                            2) - 21;
                                        var $btn_default = $(
                                            "<img />").attr(
                                            "src",
                                            "{{asset('files/media/play-default.png')}}"
                                        ).css({
                                            "position": "absolute",
                                            "top": 130 +
                                                "px",
                                            "left": left +
                                                "px",
                                            "z-index": 100
                                        }).addClass(
                                            "btn-play btn-play-default"
                                        );
                                        var $btn_active = $(
                                            "<img />").attr(
                                            "src",
                                            "{{asset('files/media/play-active.png')}}"
                                        ).css({
                                            "display": "none",
                                            "position": "absolute",
                                            "top": 130 +
                                                "px",
                                            "left": left +
                                                "px",
                                            "z-index": 110
                                        }).addClass(
                                            "btn-play btn-play-active"
                                        );
                                        $(".js-video-lead").append(
                                                $btn_default)
                                            .append($btn_active);
                                    });


                                    $(".js-video-lead img").on("click",
                                        function (event) {
                                            var $holder = $(this)
                                                .closest(
                                                    ".js-video-lead");
                                            var $video = $holder.find(
                                                "iframe");
                                            var url = $video.attr(
                                                "src");
                                            url += (url.indexOf("?") > -
                                                1) ? "&" : "?";
                                            url += "autoplay=1";
                                            $video.addClass(
                                                "js-video-lead-autoplay"
                                            ).attr("src", url);
                                            $holder.find("img")
                                                .remove();
                                            $video.show();
                                        });

                                    $(".js-video-lead > img").on(
                                        "mouseenter",
                                        function (event) {
                                            video_lead_play_state(this,
                                                true);
                                        });

                                    $(".js-video-lead > img").not(
                                        ".btn-play").on("mouseleave",
                                        function (event) {
                                            video_lead_play_state(this,
                                                false);
                                        });
                                });

                            </script>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-3 mt-2">
                            {!! $speakers->flickr !!}
                        </div>
                    </div>

                    <div class="row">
                        <div style="display:flex; align-items:flex-end;"
                            class="py-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="board__copy in-view">

                                <div style="display:flex; justify-content:flex-start; margin:0px !important;"
                                    class="board__copy--links indent in-view__child in-view__child--fadein">
                                    <input type="hidden" name="event_speaker_id" value="">
                                    <a href="{{ url()->previous() }}"
                                        style="cursor:pointer; border:0px; background:none;" class="nopadding"
                                        name="add_eventspeaker_btn">
                                        <p style="text-transform: uppercase; line-height:1.1; "
                                            class="sub-head  in-view__child in-view__child--fadein">
                                            <i style="font-size:20px; color:#0b24fa;"
                                                class="fa fa-arrow-circle-left"></i>
                                            Back To Event</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <header class="page-header mb-4">
                                <h4 class="page-title text-black text-right">ALL EVENTS</h4>
                            </header>
                            @php
                            $event_id = $speakers->event_id;
                            $date = new Carbon;
                            @endphp

                            @php( $speakerss = \App\Models\Speakers::where('event_id', $event_id)->get())


                            @foreach($speakerss as $key => $datas)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="board__copy in-view">

                                    <div class="">
                                        <img style="height:200px; object-fit:cover;"
                                            class="w-100 lazyload--el lazyload in-view__child "
                                            src="{{ asset('uploads/speakers') }}/{{ $datas->file_path }}" alt="">
                                    </div>
                                    <p>{{$datas->name}} </p>
                                    <div class="m-0 pb-3 board__copy--links indent in-view__child in-view__child--fadein">
                                        <input type="hidden" name="speaker_details_id" value="">
                                        <input type="hidden" name="events_details_id" value="">
                                            @if ($date < $datas->date)
                                                <a target="_blank" href="{{ $datas->register }}"><button
                                                        class="btn bg-blue text-white pt-2" type="button">
                                                        Register</button></a>
                                                @else
                                                <a href="{{ route('allevents', [ $datas->id]) }}" ><button class="btn bg-blue text-white pt-2"
                                                    type="button">
                                                    View</button></a>
                                            @endif
                                        </a>
                                    </div>

                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
@include('partials.footer')
@endsection
