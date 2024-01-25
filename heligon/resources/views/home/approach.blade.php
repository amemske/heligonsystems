@extends('layouts.app')

@section('title', 'Our Approach')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">Our Approach</h2>
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
  <section class="about__area-three about__bg-two" data-background="{{ asset('assets/img/bg/h3_about_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="about__img-wrap-three">
                    <img src="{{ asset('assets/img/approach.png') }}" alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-three">
                    <div class="section-title mb-25">
                        <h2 class="title">We Want Your Business to Succeed</h2>
                        <p>
                            At Heligon Systems, we are not just developers; we are architects of digital success. Our approach is rooted in a deep understanding of technology and a keen awareness of the ever-evolving business landscape. Here's how we stand out:
                        </p>
                    </div>
                    <div class="about__content-inner about__content-inner-two">
                        
                        <div class="about__list-box ">
                            <ul class="list-wrap">
                                <li><i class="fa-solid fa-check"></i>EXPERTISE <br></li>
                                <li><p>Our team possesses strong expertise in various technologies and business domains.</p></li>
                                <li><i class="fa-solid fa-check"></i>TRANSPARENCY</li>
                                <li><p>Developing and supporting Software-as-a-Service solutions</p></li>
                                <li><i class="fa-solid fa-check"></i>QUALITY</li>
                                <li><p>Creating robust and secure online shopping platforms</p></li>
                                <li><i class="fa-solid fa-check"></i>INNOVATION</li>
                                <li><p>Assisting startups in building Minimum Viable Products</p></li>
                            </ul>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

  <!-- services-area -->
        <section class="services__area-four services__bg-four" data-background="{{ asset('assets/img/bg/inner_services_bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">Our Engagement Model</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                   
                    <div class="col-lg-6 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="fa-solid fa-hammer"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title"><a href='/services-details'>FIXED PRICING</a></h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>For clients seeking a predictable budget and well-defined project scope, we also offer
                                    fixed-price contracts. With fixed-price contracts, we agree on the project’s scope and requirements
                                    upfront, and we provide a total cost for the entire project. This approach ensures that there are no unexpected costs and provides clients with a clear understanding of their financial commitment from the outset.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title"><a href='/services-details'>FEATURE-BASED PRICING</a></h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>For clients who prefer a more dynamic approach and have specific features or changes in mind, we offer feature-based pricing. This model allows clients to request specific functionalities, and we provide detailed estimates based on the required effort and resources. Feature-based pricing offers the flexibility to accommodate changes and additions to the project scope while maintaining transparency in cost estimation.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- services-area-end -->



@endsection