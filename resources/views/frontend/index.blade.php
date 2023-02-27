




@extends('frontend.main_master')
@section('main')
@section('title')
Home | Personal Portfilio
@endsection

    <!-- banner-area-end -->
    @include('frontend.main.banner')

    <!-- about-area -->
    @include('frontend.main.about')
    <!-- about-area-end -->

  {{-- Service start --}}
  @include('frontend.main.services')
  {{-- Service end --}}

    <!-- work-process-area -->
    <section class="work__process">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
    <div class="section__title text-center">
    <span class="sub-title">03 - Working Process</span>
    <h2 class="title">A clear product design process is the basis of success</h2>
    </div>
    </div>
    </div>
    <div class="row work__process__wrap">
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 01</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon01.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon01.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Discover</h4>
    <p>Initial ideas or inspiration & Establishment of user needs.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 02</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon02.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon02.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Define</h4>
    <p>Interpretation & Alignment of findings to project objectives.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 03</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon03.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon03.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Develop</h4>
    <p>Design-Led concept and Proposals hearted & assessed</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 04</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon04.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon04.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Deliver</h4>
    <p>Process outcomes finalised & Implemented</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
  @include('frontend.main.portfolio');
    <!-- portfolio-area-end -->

    <!-- partner-area -->
@include('frontend.main.partner');
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial">
    <div class="container">
    <div class="row align-items-center justify-content-between">
    <div class="col-lg-6 order-0 order-lg-2">
    <ul class="testimonial__avatar__img">
    <li><img src="assets/img/images/testi_img01.png" alt=""></li>
    <li><img src="assets/img/images/testi_img02.png" alt=""></li>
    <li><img src="assets/img/images/testi_img03.png" alt=""></li>
    <li><img src="assets/img/images/testi_img04.png" alt=""></li>
    <li><img src="assets/img/images/testi_img05.png" alt=""></li>
    <li><img src="assets/img/images/testi_img06.png" alt=""></li>
    <li><img src="assets/img/images/testi_img07.png" alt=""></li>
    </ul>
    </div>
    <div class="col-xl-5 col-lg-6">
    <div class="testimonial__wrap">
    <div class="section__title">
    <span class="sub-title">06 - Client Feedback</span>
    <h2 class="title">Happy clients feedback</h2>
    </div>
    <div class="testimonial__active">
    <div class="testimonial__item">
    <div class="testimonial__icon">
    <i class="fas fa-quote-left"></i>
    </div>
    <div class="testimonial__content">
    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
    <div class="testimonial__avatar">
        <span>Rasalina De Wiliamson</span>
    </div>
    </div>
    </div>
    <div class="testimonial__item">
    <div class="testimonial__icon">
    <i class="fas fa-quote-left"></i>
    </div>
    <div class="testimonial__content">
    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
    <div class="testimonial__avatar">
        <span>Rasalina De Wiliamson</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- blog-area -->
            @include('frontend.main.blog')
            <!-- blog-area-end -->

            <!-- contact-area -->
           @include('frontend.main.contact')
            <!-- contact-area-end -->

@endsection

