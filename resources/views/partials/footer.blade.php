@php( $events = \App\Models\Events::orderBy('id', 'asc')->limit(4)->get() ) 
<footer class="site-footer bg-blue" id="colophon" role="contentinfo">
    <div class="widget-area" role="complementary">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 ">
                    <div class="widget">
                        <div class="widget-title mt-2 mb-2">
                            <div class="site-branding">
                                <a href="{{ route('index') }} " class="">
                                    <img src="{{ asset('files/media/iamvlogo.png') }}" alt=""
                                        style="width: 94px; height: 43px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="widget">
                        <h2 class="widget-title mt-2 mb-2">Contact</h2>
                        <div class="widget_nav_menu">
                            <ul>
                                <li>
                                    <a href="mailto:info@iamvocal.com">info@iamvocal.com</a>
                                </li>
                                <li>
                                    <a href="tel:+2348060935051">+2348060935051</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="widget">
                        <h2 class="widget-title mt-2 mb-2">Past events</h2>
                        <div class="widget_nav_menu">
                            <ul>
                                <form action="#">
                                    @foreach($events as $key => $event)
                                    <li>
                                        <button
                                            style="cursor:pointer; border: 0px !important;  background:none !important;"
                                            class=" nopadding" type="submit">
                                            <a href="{{ route('subevents', [ $event->id]) }}" class="text-white">{{ $event->event_name }}</a>
                                        </button> 
                                    </li>
                                    @endforeach
                                </form>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3   ">
                    <div class="widget">
                        <h2 class="widget-title mt-2 mb-2">Follow us</h2>
                        <div class="widget_nav_menu">
                            <ul>
                                <li>
                                    <a class="redhover" href="https://twitter.com/tedxphcity" target="_blank"><i
                                            class="fa fa-twitter"> </i> Twitter</a>
                                </li>
                                <li>
                                    <a class="redhover" href="https://www.facebook.com/tedxphcity" target="_blank"><i
                                            class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li>
                                    <a class="redhover" href="https://www.instagram.com/tedxphcity/" target="_blank"><i
                                            class="fa fa-instagram"></i> Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="go-up" id="up">
    <a class="go-up__btn" href="#page">
        <span style="border-radius: 48px !important;" class="btn bg-white PageActive btn--circle">
            <i style="right: 2px;
      bottom: -2px;" class="fa fa-chevron-up"></i>
        </span>
    </a>
</div>
<div class="site-sidenav" id="sidenav" style="z-index: 100;">
    <div class="site-sidenav__overlay side-menu-swipeable" style="touch-action: pan-y; user-select: none;"></div>
    <div class="site-sidenav__elements side-menu-swipeable bg-black" style="touch-action: pan-y; user-select: none;">
        <div class="site-sidenav__branding">
            <div class="site-branding">
                <a href="{{ route('index') }}" style=" text-decoration: underline;">
                    <img src="{{ asset('files/media/iamvlogo.png') }}" alt=""
                    style="width: 94px; height: 43px">
                </a>
            </div>
        </div>
        <div class="site-sidenav__nav">
            <div class="site-sidenav__menu">
                <nav class="sidenav-navigation" aria-label="Site Mobile Menu" role="navigation">
                    <div class="menu-sidenav-menu-container">
                        <ul class="menu" id="sidenav-menu">
                            <li class="{{ (\Request::route()->getName() == 'about') ? ' PageActive' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('about') }}#ourstory">
                                            <span>Who We Are</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}#team">
                                            <span>Team</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('careers') }}">
                                            <span>Careers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('donate') }}#donations">
                                            <span>Donate</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'events') ? ' PageActive' : '' }}">
                                <a href="">Programs & Initiatives</a>
                                <ul class="sub-menu">
                                    @foreach($events as $key => $data)
                                    <li>
                                        <a  href="{{ route('subevents', [ $data->id]) }}">
                                            <span>{{ $data->event_name}}</span>
                                        </a>
                                    </li>
                                  
                                    @endforeach

                                    <li>
                                        <a href="https://voices.i-amvocal.org/join" target="_blank">
                                            <span>Voices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Post Mortem</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li class="{{ (\Request::route()->getName() == 'media') ? ' PageActive' : '' }}">
                                <a href="{{ route('media') }}">Media</a>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'contact-form') ? ' PageActive' : '' }}">
                                <a href="{{ route('contact-form') }}">Contact</a>
                            </li>

                            <!--<li>
                     <a style="color:red;" href=" admin/upload/' .$row['file_link']. '" download="Legacy Programme"></a>      
                  </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
