@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
<section class="section section--singular">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <header class="page-header">
                    <h1 class="page-title">How can we <br>help you today?</h1>
                </header>
                <div class="row double-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5 class="PageActive">Plot 151/160 Ordinance Road, Trans-Amadi</h5>
                        <p class="color--body-alt"> Port Harcourt <br>Nigeria</p>
                        <p class="color--body-alt">+234 8188688352</p>
                        <p><a class="color--body-alt link" href="mailto:info@i-amvocal.org">info@i-amvocal.org</a></p>
                        <p class="color--body-alt">Mon-Fri: 8:00-19:00</p>
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p class="big">Contact Form</p>
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <form method="POST" action="{{ route('contact-form.store') }}">
                            {{ csrf_field() }}
                            <p>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </p>
                            <p>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </p>
                            <p>
                                <textarea name="contactMessage" id="contactMessage"  cols="40" rows="10" aria-invalid="false"
                                    placeholder="How can we help?">{{ old('contactMessage') }}</textarea>
                                @if ($errors->has('contactMessage'))
                                    <span class="text-danger">{{ $errors->first('contactMessage') }}</span>
                                @endif
                            </p>
                            <p>
                                <button type="submit" class="btn text-white bg-blue btn-submit" style="border-radius: 0px !important;">Send Message</button>
                            </p>
                        </form>
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
