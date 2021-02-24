@extends('layouts.app')

@section('title')

@endsection

@section('content')


<section class="section bg-black mt-5">
    <div class="container bg-black pt-4 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                @foreach($careers as $data)
                @if ($loop->first)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 text-left text-white px-0">
                    <h4 class="fw-30">{{$careers['position']}}</h4>
                    <h5 class="fw-20">{{$careers['location']}}</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 text-white px-0">
                    <p class="fw-20">{!! $careers['about'] !!}</p>
                </div>
                <div class="speaker-neat__copy in-view pb-4">
                    <a target="_blank" href="{{ $careers->apply }}"><button class="btn bg-blue text-white "
                            type="button">
                            Apply</button></a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection


@section('footer')
@include('partials.footer')
@endsection
