@extends('layout.master')
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Service Details</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">Service Details</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-details-area -->
    <section class="services__details-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="about__img-three services__details-img">
                        <img src="{{ $Service->imagePath }}" alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-three services__details-content">
                        <div class="section__title section__title-three mb-20">
                            <h2 class="title">{{ $Service->title }}</h2>
                        </div>
                        {!! $Service->upper_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->

    

    <!-- choose-area -->
    <section class="choose__area-two section-py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title section__title-three text-center mb-60 ">
                        <span class="sub-title">Service</span>
                        <h2 class="title">PROJECT MANAGEMENT SERVICES</h2>
                    </div>
                </div>
                <div class="project__details-bottom-content">
                    <h2 class="title">About Project Management Services</h2>
                    <p>At United International Business GmbH, we understand the importance of effective project management in achieving successful outcomes. Our dedicated team of project management experts is here to help you navigate the complexities of project planning, execution, and delivery.</p>
                    <div class="project__details-list">
                        <p class="fw-bold">Our Project Management Services include:</p>
    
                    </div>
                </div>
            </div>
            <div class="choose__tab-wrap">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @forelse($Service->SubServices as $SubService)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="{{ $SubService->id }}" data-bs-toggle="tab" data-bs-target="#{{ $SubService->id }}" type="button" role="tab" aria-controls="{{ $SubService->id }}" aria-selected="true">{{ $SubService->title }}</button>
                        </li>
                    @empty
                    @endforelse
                </ul>
                <div class="tab-content" id="myTabContent">
                    @forelse($Service->SubServices as $SubService)
                        <div class="tab-pane fade show active" id="{{ $SubService->id }}" role="tabpanel" aria-labelledby="expertise-tab" tabindex="0">
                            <div class="choose__item shine__animate-item">
                                <div class="choose__item-thumb shine__animate-link">
                                    <img src="{{ $SubService->imagePath }}" alt="{{ $SubService->title }}">
                                    <p>{{ $SubService->image_description }}</p>
                                </div>
                                <div class="choose__item-content">
                                    <h2 class="title">{{ $SubService->title }}</h2>
                                    <p>{{ $SubService->description }}</p>
                                    <a href="{{ route('contact') }}" class="btn">Email Us</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="project__details-bottom-content">
                {!! $Service->lower_content !!}
            </div>
        </div>
    </section>
    <!-- choose-area-end -->
    <x-CTA />
@endsection