@extends('layouts.app')

@section('title', 'CMS Development')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">CMS Development</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CMS development</li>
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
                    <img src="{{ asset('assets/img/cms-img.jpg') }}" alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-seven">
                    <div class="section-title mb-25">
                        <span class="sub-title">Our CMS Service</span>
                        <h2 class="title"> Elevate Your Business with Responsive Excellence</h2>
                    </div>
                    <p>Our focus is on designing and developing responsive web sites, harnessing the prowess of the industry’s most robust and cutting-edge technologies to elevate your business to new heights.</p>
                    <div class="about__content-inner-five">
                       
                        <div class="about__list-box">
                            <ul class="list-wrap">
                                <li><i class="fa-solid fa-check"></i>Accessible</li>
                                <li><i class="fa-solid fa-check"></i>Performant</li>
                                <li><i class="fa-solid fa-check"></i>Secure</li>
                                <li><i class="fa-solid fa-check"></i>Responsive</li>
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
<section class="services__area-four services__bg-four" data-background="{{ asset('assets/img/bg/inner_services_bg.jpg') }}">
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
                            <h2 class="title"><a href='/services-details'>Business analysis</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Our business analysts focus on the needs of your target audience. They also bridge the gap between business stakeholders and an tech team to keep all the involved parties aligned.</p>
                        
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
                            <h2 class="title"><a href='/services-details'>Front-end design and development</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Our web designers closely analyze the user audience to understand their needs and reflect these findings in UI design. End version of web app is brought to life with the help of top-notch front-end coding.</p>
                        
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
                            <h2 class="title"><a href='/services-details'>Back-end development</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Our developers accurately implement the business logic of your web app on the back end. We rely on proven CMS to ensure fast and quality coding.</p>
                        
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
                            <h2 class="title"><a href='/services-details'>Continuous support & iteration</a></h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>We set up APIs to integrate your web app with corporate or third-party systems and services. App integration ensures immediate data synchronization across systems.</p>
                       
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
 <section class="services__area-six services__bg-six" data-background="{{ asset('assets/img/bg/h3_services_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">   
                <h1 class="title tg-element-title mb-20 text-center text-white">Featured Drupal Websites</h1>
            </div>
            
        </div>
       

        <div class="row justify-content-center gutter-24">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies">
                        <img src="{{ asset('assets/img/maseno.jpg') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='https://www.maseno.ac.ke/' target="_blank">Maseno University</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies">
                        <img src="{{ asset('assets/img/aacc.jpg') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='https://www.aacc-ceta.org/' target="_blank">AACC</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services__item-two">
                    <div class="services__icon-two portfolio-casestudies">
                        <img src="{{ asset('assets/img/tomboya.jpg') }}" alt="">
                    </div>
                    <div class="services__content-two">
                        <h2 class="title"><a href='https://www.tmu.ac.ke/' target="_blank">Tom Mboya University</a></h2>
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
                                        What makes your Drupal services exceptional?
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Our Drupal expertise goes beyond conventional offerings. We provide a comprehensive suite of services, including secure and scalable web application development, UI/UX design, migration solutions, e-commerce development, and 24/7 support. This holistic approach ensures your Drupal project thrives at every stage.</div>
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