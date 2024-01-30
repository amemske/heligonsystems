@extends('layouts.app')

@section('title', 'Web Development')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">Web App Development</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Web App  development</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- breadcrumb-area-end -->
<!-- about-area -->
<section class="about__area-seven">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                <div class="about__img-wrap-seven">
                    <img src="{{ asset('assets/img/webapp-image.webp') }}" alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-seven">
                    <div class="section-title mb-25">
                        <span class="sub-title">Web App Development </span>
                        <h2 class="title"> Elevate Your Business with Responsive Excellence</h2>
                    </div>
                    <p>At Heligon Systems, we specialize in crafting custom web solutions that redefine online excellence. Our dedicated focus revolves around leveraging the power of industry-leading technologies such as Spring, Laravel, and Next.js to propel your business to unparalleled heights. These custom web applications are:-</p>
                    <div class="about__content-inner-five">
                       
                        <div class="about__list-box">
                            <ul class="list-wrap">
                                <li><i class="fa-solid fa-check"></i>Adaptable</li>
                                <li><i class="fa-solid fa-check"></i>Optimized for Performance</li>
                                <li><i class="fa-solid fa-check"></i>Secure</li>
                                <li><i class="fa-solid fa-check"></i>and have Responsive Design</li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="about__shape-wrap-four">
        <img src="{{ asset('assets/img/images/h4_about_shape01.png') }}" alt="">
        <img src="{{ asset('assets/img/images/h4_about_shape02.png') }}" alt="" data-parallax='{"x" : -80 , "y" : -80 }'>
    </div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services__area-four services__bg-four" data-background="{{ asset('assets/img/bg/inner_services_bg.webp') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-50">
                    <h2 class="title">How it works</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24">
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            1
                        </div>
                        <div class="services__item-top-title">
                            <h2 class="title"><a href='/services-details'>Strategic Planning & Discovery</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Our adept business analysts delve into understanding the specific needs of your target audience. Acting as the liaison between business stakeholders and our tech team, they meticulously plan the project to ensure alignment and clarity in objectives.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            2
                        </div>
                        <div class="services__top-title">
                            <h2 class="title"><a href='/services-details'>Front-end Design and Development with Next.js</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Our web designers conduct a thorough analysis of your user audience, translating insights into a captivating UI design. With Next.js, we bring the envisioned web application to life through cutting-edge front-end coding, ensuring an optimal and responsive user experience.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            3
                        </div>
                        <div class="services__item-top-title">
                            <h2 class="title"><a href='/services-details'>Back-end Mastery with Laravel and Spring</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>The core of your web application is crafted through meticulous implementation of business logic on the back end. Leveraging the power of Laravel and Spring, our developers ensure swift, secure, and high-quality coding, establishing the foundation for a robust and scalable web solution.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            4
                        </div>
                        <div class="services__top-title">
                            <h2 class="title"><a href='/services-details'>Support & Iterative Enhancements</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Beyond the launch, our commitment continues with continuous support and iteration. We establish APIs to seamlessly integrate your web application with corporate or third-party systems and services, ensuring immediate data synchronization across platforms. This dynamic approach allows us to adapt and enhance your web solution as your business evolves.</p>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="services__shape-wrap-two">
        <img src="{{ asset('assets/img/services/inner_services_shape01.png') }}" alt="" data-aos="fade-right" data-aos-delay="400">
        <img src="{{ asset('assets/img/services/inner_services_shape02.png') }}" alt="" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- services-area-end -->

 <!-- services-area -->
 <section class="services__area-six services__bg-six" data-background="{{ asset('assets/img/bg/h3_services_bg.webp') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">   
                <h1 class="title tg-element-title mb-20 text-center text-white">Frameworks we use</h1>
            </div>
            
        </div>
       

        <div class="row justify-content-center gutter-24">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies frameworks-we-use">
                        <img src="{{ asset('assets/img/spring.webp') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='/services-details'>Spring</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies frameworks-we-use">
                        <img src="{{ asset('assets/img/next-js.svg') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='/services-details'>next-js</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies frameworks-we-use">
                        <img src="{{ asset('assets/img/laravel.webp') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='/services-details'>Laravel</a></h2>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- services-area-end -->

<!-- FAQ -->
<section class="faqs__area-six">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12 mb-30">
                <div class="box-faq-right">
                    <h1 class="title tg-element-title mb-20 text-center">Frequently asked questions</h1>
                     <div class="block-faqs">
                        <div class="accordion wow fadeInUp" id="accordionFAQ">
                            
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        
What sets our custom web development services apart?
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Our proficiency in Laravel, Spring, and Next.js extends beyond the ordinary. We offer a diverse range of services, encompassing tailored web application development, innovative UI/UX design, seamless migration solutions, dynamic e-commerce development, and round-the-clock support. This comprehensive approach guarantees the success of your custom web development project at every phase.</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ -->

@endsection