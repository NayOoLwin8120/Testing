@php
$aboutus=App\Models\Home\Aboutus::find(1);
$multiimg=App\Models\MultiImage::all();


@endphp

<section id="aboutSection" class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="about__icons__wrap">
                                @foreach($multiimg as $item)
                                <li>
                                    <img class="light" src="{{asset($item->multiimage)}}" alt="XD">
                                    <img class="dark" src="{{asset($item->multiimage)}}" alt="XD">
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <div class="section__title">
                                    <span class="sub-title">01 - About me</span>
                                    <h2 class="title">{{$aboutus->title}}</h2>
                                </div>
                                <div class="about__exp">
                                    <div class="about__exp__icon">
                                        <img src="{{asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                                    </div>
                                    <div class="about__exp__content">
                                        <p>{{$aboutus->short_title}}</p>
                                    </div>
                                </div>
                                <p class="desc">{{$aboutus->short_description}}</p>
                                <a href="{{route('home.about')}}" class="btn">Download my resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
