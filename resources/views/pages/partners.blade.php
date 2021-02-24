@extends('layouts.app')

@section('title')
Partners
@endsection

@section('content')
@php( $careers = \App\Models\Careers::all() )

<section class="section section--singular2 video bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block text-left mb-5">
                    <h2 class="fw-12 underline">CAREERS</h2>
                    <h3 class="fw-40">Join Our Team</h3>
                </div>
                <img src="{{ asset('files/media/aboutmain1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section section--singular2 video bg-black pt-2">
    <div class="container abtTedxph">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
                <p class="text-center px-4 text-white fw-24 py-3">Join a large community of clapham omnibus who are
                    passionate about changing the status quo in our society, volunteering with us is an opportunity to
                    serve mankind and also improve your skills set. Be a part of our community of social good advocates.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="section section--singular2 video py-5">
    <div class="container abtTedxph">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center py-3">
                <h2>Open Positions</h2>
                <p class="px-4 fw-16 py-3">We’re looking for people to join the team who are as
                    excited as we are to help build the platform that is passionate about changing the status quo in our
                    society. Be a part of our community of social good advocates</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 cool-xs-12 text-left">
                @if ($careers->count() > 0)
                @foreach($careers as $key => $data)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                    <a class="text-black" href="{{"viewCareer/".$data['id']}}">
                        <div class="positions border p-4">
                            <h3 class="pt-3 fw-12"> {{ $data->position }}</h3>
                            <p> {{ $data->location }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="text-center">
                    <h4>No Available Positions</h4>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
@include('partials.footer')
@endsection
