@extends('layouts.app')

@section('title', 'About Us')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                    <img src="{{ asset('assets/img/about-img.webp') }}" alt="">
                    
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-seven">
                    <div class="section-title mb-25">
                        <span class="sub-title">ABOUT</span>
                        <h2 class="title">Our Vision</span></h2>
                    </div>
                    <p>For clients seeking transparency and a well-defined project journey, we offer fixed-price contracts. Through this approach, we collaboratively establish the project's scope and requirements upfront, providing a comprehensive cost for the entire endeavor. This ensures a predictable budget, eliminates unexpected costs, and grants clients a crystal-clear understanding of their financial commitment from the project's inception.</p>
                    
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

<!-- request-area -->
<section class="request__area-two">
    <div class="request__bg-two" data-background="{{ asset('assets/img/about-bg.webp') }}"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8 col-lg-8">
                <div class="request__content-two">
                    <h2 class="title">Our Core Values</h2>
                    <div class="request__phone">
                        <p class="text-white">
                            At Heligon Systems, we are driven by unwavering values of fairness, equality, integrity, and honesty. Our corporate philosophy centers on total customer satisfaction, continual improvement, and full engagement. Committed to delivering unparalleled products and services, we embrace change and consistently pursue innovation through modern technology and cutting-edge methodologies. Join us on a journey where excellence meets integrity, and innovation thrives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- request-area-end -->

<!-- services-area -->
<section class="services__area-seven services__bg-seven">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-50 tg-heading-subheading ">
                  
                    <h2 class="title tg-element-title">Our Process</h2>
                </div>
            </div>
        </div>
        <div class="services__item-wrap-two">
            <div class="row justify-content-center gutter-24">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">Discovery</h2>
                            <p>We delve into your business intricacies, uncovering key insights to tailor solutions that ensure your success.</p>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">User interface design</h2>
                            <p>Crafting engaging and user-centric interfaces, we prioritize seamless experiences to captivate and satisfy your customers.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">development</h2>
                            <p>Specializing in mobile & web development, we bring your vision to life with precision and expertise.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-square-check"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">testing & Quality assurance</h2>
                            <p>Rigorous testing underpins our commitment to flawless products, employing advanced quality assurance methodologies to meet the highest standards.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">deployment</h2>
                            <p>Facilitating seamless launches, scaling, and ongoing maintenance, we empower companies to thrive in the digital landscape.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five services__item-six">
                        <div class="services__icon-five">
                            <div class="icon">
                                <i class="fa-solid fa-shield"></i>
                            </div>
                            <div class="services__icon-shape">
                                <div class="shape one">
                                    <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#ecf6fa" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title">data management & Maintenance</h2>
                            <p>Efficiently and securely managing your business data, we implement robust strategies to safeguard and optimize your valuable information.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->



@endsection