@php
    $blogs=App\Models\Blog::latest()->limit(3)->get();

@endphp
<section class="blog">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="blog__post__item">
                                    <div class="blog__post__thumb">
                                        <a href="{{route('blogdetail',$blog->id)}}"><img src="{{asset($blog->blog_image)}}" alt="No image"></a>
                                        <div class="blog__post__tags">
                                            <a href="blog.html">{{$blog->category->category_name}}</a>
                                        </div>
                                    </div>
                                    <div class="blog__post__content">
                                        <span class="date">{{$blog->created_at->diffForHumans()}}</span>
                                        <h3 class="title"><a href="{{route('blogdetail',$blog->id)}}">{{$blog->blog_title}}</a></h3>
                                        <a href="{{route('blogdetail',$blog->id)}}" class="read__more">{{$blog->blog_button}}</a>
                                    </div>
                                </div>
                             </div>
                        @endforeach


                    </div>
                    <div class="blog__button text-center">
                        <a href="{{route('allblogs')}}" class="btn">more blog</a>
                    </div>
                </div>
            </section>
