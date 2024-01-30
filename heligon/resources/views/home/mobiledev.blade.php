@extends('layouts.app')

@section('title', 'Mobile Development')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">Mobile Development</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">mobile development</li>
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
                    <img src="{{ asset('assets/img/mobile-img.webp') }}" alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-seven">
                    <div class="section-title mb-25">
                        <span class="sub-title">Our Mobile Development Service</span>
                        <h2 class="title"> Full-cycle iOS and Android app development</h2>
                    </div>
                    <p>Efficient solutions to fit your business domain and budget requirements. We provide custom development for businesses, MVPs to verify your startup ideas and launch your product earlier, and development teams to support or enhance existing products.</p>
                    <div class="about__content-inner-five">
                       
                        <div class="about__list-box">
                            <ul class="list-wrap">
                                <li><i class="fa-solid fa-check"></i>Kotlin Crossplatform Development</li>
                                <li><i class="fa-solid fa-check"></i>Flutter Mobile Development</li>
                                <li><i class="fa-solid fa-check"></i>React Native Development</li>
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
 <section class="services__area-seven services__bg-seven services__area-home7" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">industries</span>
                    <h2 class="title">Custom mobile apps</h2>
                    <p>Here are some of the industries we serve</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services__item-five">
                 
                    <div class="services__content-five">
                        <h2 class="title"><a href='/services-details'>Fitness Solutions</a></h2>
                        <p>Our team of engineers create diverse range of fitness applications, covering everything from nutrition to personalized workout routines and activity tracking. These apps are meticulously tailored for both Android and iOS platforms, seamlessly integrating features like synchronization with native health services (HealthKit, GoogleFit), geolocation services (Google Maps, MapKit), and more.</p>
                      
                        <p class="title">Average Development time</p>
                        <p>1800 hours</p>

                        <p class="title">Average project time</p>
                        <p>4 months</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services__item-five">
                 
                    <div class="services__content-five">
                        <h2 class="title"><a href='/services-details'>E-Commerce Platform</a></h2>
                        <p>Our e-commerce solutions empower businesses to thrive in the digital marketplace. With a focus on user experience and scalability, our team crafts dynamic platforms tailored to client needs. Our e-commerce apps seamlessly integrate payment gateways, inventory management systems, and customer relationship tools, ensuring a seamless shopping experience across web and mobile platforms.</p>
                      
                        <p class="title">Average Development time</p>
                        <p>2000 hours</p>

                        <p class="title">Average project time</p>
                        <p>5 months</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services__item-five">
                 
                    <div class="services__content-five">
                        <h2 class="title"><a href='/services-details'>Education & Learning App</a></h2>
                        <p>Transform education with our immersive learning applications. Our educational solutions revolutionize the way users engage with content, offering interactive lessons, personalized learning paths, and comprehensive analytics. Whether it's language learning, skill development, or academic tutoring, our apps empower learners to achieve their goals with ease.</p>
                      
                        <p class="title">Average Development time</p>
                        <p>2200  hours</p>

                        <p class="title">Average project time</p>
                        <p>5 months</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="services__item-five">
                 
                    <div class="services__content-five">
                        <h2 class="title"><a href='/services-details'>Social Networking App</a></h2>
                        <p>Elevate your social networking experience with our innovative solutions. Our team designs cutting-edge social platforms that foster meaningful connections and engagement. From intuitive user interfaces to robust backend infrastructure, our apps harness the power of social interaction, offering features like real-time messaging, multimedia sharing, and advanced privacy controls.</p>
                      
                        <p class="title">Average Development time</p>
                        <p>2500 hours</p>

                        <p class="title">Average project time</p>
                        <p>6 months</p>

                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- services-area-end -->

 <!-- services-area -->
 <section class="services__area-six services__bg-six" data-background="assets/img/bg/h3_services_bg.webp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title white-title mb-40 tg-heading-subheading text-center">
                    <span class="sub-title">WHAT WE OFFER</span>
                    <h2 class="title tg-element-title">Technologies we use</h2>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="services__tab-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane" aria-selected="true"> Languages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="travel-tab" data-bs-toggle="tab" data-bs-target="#travel-tab-pane" type="button" role="tab" aria-controls="travel-tab-pane" aria-selected="false">Databases</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vehicle-tab" data-bs-toggle="tab" data-bs-target="#vehicle-tab-pane" type="button" role="tab" aria-controls="vehicle-tab-pane" aria-selected="false">Frameworks</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                            <div class="services__item-four shine-animate-item">
                               
                                <div class="services__content-four">
                                    <p>Explore our savings, quality care and wellness solutions to craft the perfect plan for your busineshen an unknown printer.</p>
                                    <div class="about__list-box">
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-check"></i>Kotlin</li>
                                            <li><i class="fas fa-check"></i>Dart</li>
                                            <li><i class="fas fa-check"></i>Java</li>
                                            <li><i class="fas fa-check"></i>Javascript</li>   
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="travel-tab-pane" role="tabpanel" aria-labelledby="travel-tab" tabindex="0">
                            <div class="services__item-four shine-animate-item">
                                
                                <div class="services__content-four">
                                    <p>Explore our savings, quality care and wellness solutions to craft the perfect plan for your busineshen an unknown printer.</p>
                                    <div class="about__list-box">
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-check"></i>SQLite</li>
                                            <li><i class="fas fa-check"></i>Firebase</li>
                                            <li><i class="fas fa-check"></i>Postgres</li>
                                        </ul>
                                    </div>
                                    <a class='btn' href='/services-details'>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="vehicle-tab-pane" role="tabpanel" aria-labelledby="vehicle-tab" tabindex="0">
                            <div class="services__item-four shine-animate-item">
                                
                                <div class="services__content-four">
                                    <p>Explore our savings, quality care and wellness solutions to craft the perfect plan for your busineshen an unknown printer.</p>
                                    <div class="about__list-box">
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-check"></i>Socket.IO</li>
                                            <li><i class="fas fa-check"></i>Expresso</li>
                                            <li><i class="fas fa-check"></i>Junit</li>
                                            <li><i class="fas fa-check"></i>RxJava</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
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
                                        What makes your Mobile Development services exceptional?
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Our Mobile Development expertise transcends traditional boundaries. We offer a wide range of services tailored to the mobile ecosystem, encompassing native and cross-platform app development, responsive design, mobile UI/UX optimization, backend integration, and continuous support. This comprehensive approach guarantees that your mobile project excels across diverse platforms and devices.</div>
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