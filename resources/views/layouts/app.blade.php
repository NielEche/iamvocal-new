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

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700i,700|Poppins:700">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="stylesheet" href="{{ asset('files/css/font-awesome.css') }}" type="text/css" media="all">

        <!-- Styles -->
        <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
        <link rel="stylesheet" href="{{ asset('files/css/style.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('files/css/scheme-eliza.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('files/css/style-custom.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('files/css/trackpad-scroll-emulator.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('files/css/jquery.nouislider.min.css') }}" type="text/css">

        <style>
            #st-el-1 .st-btn[data-network='facebook'] ,
            #st-el-1 .st-btn[data-network='twitter'] ,
            #st-el-1 .st-btn[data-network='pinterest'] ,
            #st-el-1 .st-btn[data-network='email'] ,
            #st-el-1 .st-btn[data-network='sharethis'] ,
            #st-el-1 .st-btn[data-network='whatsapp'] {
          background-color: #000 !important;
        }
        
        </style>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('files/favicons/iamvfavicon.ico') }}" type="image/x-icon">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>
        <script>
            (function (html) {
                html.className = html.className.replace(/\bno-js\b/, 'js')
            })(document.documentElement)
    
        </script>

<!—- ShareThis BEGIN -—>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5fca680f406fcb0018f243b6&product=sticky-share-buttons" async="async"></script>
<!—- ShareThis END -—>
    </head>
    <body class="page">
        <div class="site" id="page">
            <!-- Page Heading -->
            @include('partials.header')

            <!-- Page Content -->
            <div class="site-content" id="content">
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        @yield('content')
                        @yield('footer')
                    </main>
                </div>
            </div>
        </div>

        @livewireScripts
        <script src="{{ asset('files/jquery/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ asset('files/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('files/js/slide.js') }}"></script>
        <script src="{{ asset('files/js/home.js') }}"></script>
        <script type="application/javascript" src="{{ asset('files/js/lib.js') }}"></script>
        <script defer async type="application/javascript" src="{{ asset('files/js/app.js') }}"></script>
        <script type="application/javascript" src="{{ asset('files/js/lib.min.js') }}"></script>
    </body>
</html>
