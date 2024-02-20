<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Heligon Systems</title>
    <meta name="keywords" content="web design, web development, website design, best website builders, web developers, best website design, ecommerce websites, responsive web design, best website makers, web design websites, website design and development, great website designs, good web design, best web page design, responsive website design, web site designs, drupal design and development, wordpress webpage, build wordpress site, wordpress website creation, wordpress blog, drupal website, websites built with drupal, best webdesign company">
    <meta name="description" content="Heligon Systems specializes in comprehensive technology solutions, including custom software development, web design, mobile app development, and strategic technology consulting. Our expert team delivers innovative solutions tailored to your business needs, driving growth and enhancing user experiences. Partner with us for top-notch technology services designed to propel your business forward.">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.webp') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}"> {{-- laravel mix--}}
</head>
<body>
   
    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <!-- header-area -->
    @include('partials._header')
   
    <!-- header-area-end -->
    <!-- main-area -->
    <main class="fix">
        @yield('content')
    </main>
    <!-- main-area-end -->
     <!-- footer-area -->
     @include('partials._footer')
    
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        const text = document.querySelector('.circle');
        text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
        const element = document.querySelectorAll('.circle span');
        for (let i = 0; i < element.length; i++) {
            element[i].style.transform = "rotate(" + i * 17 + "deg)"
        }
    </script>
</body>
</html>