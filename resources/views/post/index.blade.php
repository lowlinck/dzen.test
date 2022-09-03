@extends('layouts.app')
@include('inc.header')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog single page</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by Richard Searls• February 1, 2019• 6:31 pm• Featured • 4 Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('assets/images/blog-post-featured-img.png')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4 mb-3" data-aos="fade-right">
                        <img src="{{asset('assets/images/blog_post_1.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-4 mb-3" data-aos="fade-up">
                        <img src="{{asset('assets/images/blog_post_2.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-4 mb-3" data-aos="fade-left">
                        <img src="{{asset('assets/images/blog_post_3.jpg')}}" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p data-aos="fade-up"><a href="#">Lorem ipsum, or lipsum as it is sometimes known,</a> is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                        <h2 class="mb-4" data-aos="fade-up">Blog single page</h2>
                        <ul data-aos="fade-up">
                            <li>What manner of thing was upon me I did not know, but that it was large and heavy and many-legged I could feel.</li>
                            <li>My hands were at its throat before the fangs had a chance to bury themselves in my neck, and slowly</li>
                            <li>I forced the hairy face from me and closed my fingers, vise-like, upon its windpipe.</li>
                        </ul>

                        <blockquote data-aos="fade-up">
                            <p>You are safe here! I shouted above the sudden noise. She looked away from me downhill. The people were coming out of their houses, astonished.</p>
                            <footer class="blockquote-footer">Oluchi Mazi</footer>
                        </blockquote>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{asset('assets/images/blog_post_related_1.png')}}" alt="related post" class="post-thumbnail">
                                <p class="post-category">Blog post</p>
                                <h5 class="post-title">Front becomes an official Instagram</h5>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{asset('assets/images/blog_post_related_2.png')}}" alt="related post" class="post-thumbnail">
                                <p class="post-category">Blog post</p>
                                <h5 class="post-title">Front becomes an official Instagram</h5>
                            </div>
                            <div class="col-md-4" data-aos="fade-left" data-aos-delay="100">
                                <img src="{{asset('assets/images/blog_post_related_3.png')}}" alt="related post" class="post-thumbnail">
                                <p class="post-category">Blog post</p>
                                <h5 class="post-title">Front becomes an official Instagram</h5>
                            </div>
                        </div>
                    </section>
                    @include('inc.viewCommens', ['comments' => $post->comments, 'post_id' =>'1'])
                </div>
            </div>
        </div>
    </main>

@endsection
