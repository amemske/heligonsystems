@extends('layouts.app')

@section('title', 'Best Web and Mobile Development Company')

@section('content')
   <!-- banner-area -->
   <section class="banner-area banner-bg" data-background="{{ asset('assets/img/hero1.webp') }}">
    <div class="container d-none d-sm-block">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="title" data-aos="fade-up" data-aos-delay="200">Achieve Success </br>with Expert Web <br>& Mobile Solution</h1>
                    <p data-aos="fade-up" data-aos-delay="400">Explore our comprehensive services for digital transformation. From strategic consultation to cutting-edge software development, web design, and mobile app development, we're here to help you progress.</p>
                    
                </div>
               
            </div>
        </div>
       
    </div>
</section>
<div class="container d-block d-sm-none pt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="banner-content">
                <h2 class="title" data-aos="fade-up" data-aos-delay="200">Succeed with </br>Proven Web <br>& Mobile Solution</h2>
                <p data-aos="fade-up" data-aos-delay="400">Discover our wide array of services tailored for your digital evolution.
                    From insightful consultations to responsive web design, and mobile app creation, we're committed to driving your growth.</p>
                
            </div>
           
        </div>
    </div>
   
</div>
<!-- banner-area-end -->

<!-- about-area -->
<section id="about" class="about-area pt-60 pb-40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                        <img src="{{ asset('assets/img/home-intro.webp') }}" alt="Trusted Software Solutions Partner - Web Design and Development">                 
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title mb-35 tg-heading-subheading ">
                        <h2 class="title tg-element-title">Trusted Software Solutions Partner</h2>
                    </div>                 
                    <p>Unlock the full potential of your business with our tailored software solutions, spanning web, mobile, and cloud platforms. Our agile methodology ensures swift and effective outcomes, suitable for projects of all scopes. Propel your growth trajectory with our specialized expertise.</p>                                  
                </div>
            </div>
        </div>
    </div>
    <div class="about-left-shape">
        <img src="{{ asset('assets/img/images/about_shape02.webp') }}" alt="">
    </div>
</section>
<!-- about-area-end -->

  <!-- project-area -->
  <section class="project-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title text-center mb-50 tg-heading-subheading ">
                    <span class="sub-title">OUR SERVICES</span>
                    <h2 class="title tg-element-title">Technology Solutions</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="project-item-wrap">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="project-item">
                        <div class="project-thumb">
                            <a href='/project-details'><img src="{{ asset('assets/img/home-web.webp') }}" alt="Web App Development - Best Website Builders"></a>
                        </div>
                        <div class="project-content">
                            <div class="left-side-content">
                                <h4 class="title"><a href='{{ route('home.webdev') }}'>Web App Development</a></h4>
                                <span>Web Apps with React, Laravel and Spring</span>
                            </div>
                            <div class="link-arrow">
                                <a href='/project-details'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item">
                        <div class="project-thumb">
                            <a href='/project-details'><img src="{{ asset('assets/img/home-mobile.webp') }}" alt="mobile app developers"></a>
                        </div>
                        <div class="project-content">
                            <div class="left-side-content">
                                <h4 class="title"><a href='{{ route('home.mobiledev') }}'>Mobile Development</a></h4>
                                <span>Unified Code Base for iOS and Android</span>
                            </div>
                            <div class="link-arrow">
                                <a href='/project-details'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item">
                        <div class="project-thumb">
                            <a href='/project-details'><img src="{{ asset('assets/img/home-data.webp') }}" alt="Wordpress Responsive Web Design"></a>
                        </div>
                        <div class="project-content">
                            <div class="left-side-content">
                                <h4 class="title"><a href='{{ route('home.cmsdev') }}'>Responsive Web Design</a></h4>
                                <span>Powered by Wordpress & Drupal</span>
                            </div>
                            <div class="link-arrow">
                                <a href='/project-details'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z" fill="currentcolor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
  
</section>
<!-- project-area-end -->



<!-- choose-area -->
<section class=" light-bg">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title text-center mb-50 tg-heading-subheading ">
                    <span class="sub-title">OUR SOLUTIONS</span>
                    <h2 class="title tg-element-title">Enterprise Solutions</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="choose-list">
                    <ul class="list-wrap">
                     
                        <li>
                            <div class="icon">
                                <img src="{{ asset('assets/img/hexagon.webp') }}" alt="hexagon" class="">
                            </div>
                            <div class="content">
                                <h4 class="title">Seamless Supply Chain and Logistics</h4>
                                <p>Optimize your supply chain and logistics processes with our specialized solutions, ensuring seamless operations and cost-effective management.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('assets/img/hexagon.webp') }}" alt="hexagon" class="">
                            </div>
                            <div class="content">
                                <h4 class="title">Insightful Data Analytics and Business Intelligence</h4>
                                <p>Harness the potential of data-driven decision-making with our advanced analytics tools, providing invaluable insights for strategic growth.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-content">
                   
                      <div class="choose-list">
                        <ul class="list-wrap">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/hexagon.webp') }}" alt="hexagon" class="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Streamlined Enterprise Resource Planning (ERP)s</h4>
                                    <p>Navigate complex business operations seamlessly with our ERP solutions, enhancing efficiency and accuracy across your organization.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets/img/hexagon.webp') }}" alt="hexagon" class="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Enhanced Customer Relationship Management (CRM)</h4>
                                    <p>Forge lasting connections with your clientele using our CRM systems, designed to elevate customer interactions and satisfaction.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- choose-area-end -->


<!-- brand-area -->
<div class="brand-area">
<div class="container">
    <div class="swiper-container brand-active">
        <div class="swiper-wrapper">
           
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img02.png') }}" alt="Maseno University - Drupal development">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="All African Conference of Churches - Drupal development">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img04.png') }}" alt="Center for Urban Research and Innovation - Wordpress development">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img05.png') }}" alt="Tom Mboya University - Drupal  web development">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img06.png') }}" alt="ROHO - Wordpress development">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-item">
                    <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="All African Conference of Churches - Drupal development">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- brand-area -->

@endsection