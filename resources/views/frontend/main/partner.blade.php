@php
$alldata=App\Models\Partner::first();
$multiimg=App\Models\Pimage::latest()->limit(6)->get();

@endphp
 <section class="partner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="partner__logo__wrap">
                                @foreach ( $multiimg as $item )
                                     <li>
                                    <img class="light" src="{{asset($item->multiimage)}}" alt="">
                                    <img class="dark"src="{{asset($item->multiimage)}}" alt="">
                                </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="partner__content">
                                <div class="section__title">
                                    <span class="sub-title">05 - partners</span>
                                    <h2 class="title">{{$alldata->title}}</h2>
                                </div>
                                <p>{!! $alldata->short_description!!}</p>
                                <a href="{{route('contactme')}}" class="btn">Start a conversation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
