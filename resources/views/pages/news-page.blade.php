@extends('layouts.app')

@section('title')
News
@endsection

@section('content')

<section class="section bg-black section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-">
                <img class="w-100 lazyload--el lazyload in-view__child"
                    src="{{ asset('uploads/news') }}/{{ $news->file_path }}"
                    alt="{{$news['title']}}" style="height:500px; object-fit:cover;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <div class="py-5 text-white">
                    <h4>{{$news['title']}}</h4>
                    <h6 class="PageActive">{{ \Carbon\Carbon::parse($news->date)->format('M d Y')}}</h6>
                    <p>{{$news['details']}}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@section('footer')
@include('partials.footer')
@endsection
