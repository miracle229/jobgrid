@extends('layouts.app')

@section('content')
<div class="latest-news-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Latest News & Blog</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                    Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-news wow fadeInUp" data-wow-delay=".3s">
                    <div class="image">
                        <img class="thumb" src="{{Storage::url($blog->image->path)}}" alt="#">
                    </div>
                    <div class="content-body">
                        <h4 class="title">{{ $blog->title }}</h4>
                        <p>{{ $blog->categorie->title}}</p>
                        <div class="button">
                            <a href="blog-single.html" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection