@extends('layouts.app')

@section('title')
News
@endsection

@section('content')

<section class="section bg-black section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                @foreach($news as $index => $news)
                <div class="text-white text-center pt-5">
                    <h5 class="fw-12 PageActive">NEWS & ARCHIVES</h5>
                    <h1 class="fw-48 py-1">{{$news['title']}}</h1>
                    
                    <h6>{{ \Carbon\Carbon::parse($news->date)->format('M d Y')}}</h6>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 pt-5">
                    <img class="w-100 lazyload--el lazyload in-view__child"
                        src="{{ asset('uploads/news') }}/{{ $news->file_path1 }}" alt="{{$news['title']}}"
                        style="height:500px; object-fit:cover;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3 text-white">
                    <p>{!!$news['details']!!}</p>
                </div>
                @endforeach

                @foreach($newsDetails as $index => $news)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 py-1">
                    @if ( $news->file_path )
                    <img class="w-100 lazyload--el lazyload in-view__child"
                    src="{{ asset('uploads/news') }}/{{ $news->file_path }}"
                    style="height:500px; object-fit:cover;">
                    @else 
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 text-white">
                    @if ( $news->details )
                    <p>{!!$news['details']!!}</p>
                    @else 
                    @endif
                </div>
                @endforeach

                <div class="share-social text-white py-5">
                    <h5 class="pt-4">share</h5>
                    <div class="social-links">
                        <a class="facebook"
                            href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" 
                            aria-label="Facebook">
                            Facebook </a>
                        <a class="twitter"
                            href="https://twitter.com/share?text={{$news['title']}}&amp;url={{url()->current()}}"
                            target="_blank"  aria-label="Twitter">
                            Twitter </a>
                        <a class="pinterest"
                            href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&amp;description={{$news['title']}}&amp;media={{ asset('uploads/news') }}/{{ $news->file_path }}"
                            target="_blank"  aria-label="Pinterest">
                            Pinterest </a>
                        <a class="envelope-o"
                            href="mailto:?subject={{$news['title']}}&amp;body=Check out what I just spotted: {{url()->current()}}"
                            target="_blank"  aria-label="Email">
                            Email </a>
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
