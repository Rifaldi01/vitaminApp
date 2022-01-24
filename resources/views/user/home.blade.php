@extends('layouts.master')
@section('content')
<div class="card-head text-center mt-5">
    <span class="subheading ">Our Product</span>
    <h2 class="text-center  mb-2  ">Types Of Products</h2>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="product-box">
            <h4 class="product-name">Vitacimin Lemon</h4>
            <img src="{{URL::to('images/vitacimin-1.png')}}" alt="vitacimin" class="product-img-2">
            <a href="" class="btn btn-primary product-tombol">Show Detail</a>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="product-box-2">
            <h4 class="product-name">Vitacimin Lemon</h4>
            <img src="{{URL::to('images/vitacimin-2.png')}}" alt="vitacimin" class="product-img">
            <a href="" class="btn btn-primary product-tombol">Show Detail</a>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="product-box-3">
            <h4 class="product-name">Vitacimin Lemon</h4>
            <img src="{{URL::to('images/vitacimin-3.png')}}" alt="vitacimin" class="product-img">
            <a href="" class="btn btn-primary product-tombol">Show Detail</a>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="product-box-4">
            <h4 class="product-name">Vitacimin Lemon</h4>
            <img src="{{URL::to('images/vitacimin-4.png')}}" alt="vitacimin" class="product-img-2">
            <a href="" class="btn btn-primary product-tombol">Show Detail</a>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-xl">
        <div class="row g-lg-5">
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="img w-100" style="background-image: url(images/about-vit.png);"></div>
            </div>
            <div class="col-lg-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="mt-0 my-lg-5 py-5">
                    <span class="subheading">About Furnish</span>
                    <h2 class="mb-4">More than 20k Trusted Our Furniture Industry</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="ftco-gallery ftco-no-pb ftco-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Images</span>
                    <h2 class="mb-4">Images Product</h2>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-1.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-2.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-3.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-3.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="images/gallery-4.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-4.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-5.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-5.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-6.jpg" class="gallery-wrap img d-flex align-items-end justify-content-center glightbox" style="background-image: url(images/gallery-6.jpg);">
                        <div class="text">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Happy Customers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent From Blog</h2>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('images/vitacimin-1.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Shop the Look Cottage Country Living Room</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('images/vitacimin-2.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Shop the Look Cottage Country Living Room</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img order-lg-last" style="background-image: url('images/vitacimin-3.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Shop the Look Cottage Country Living Room</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img order-lg-last" style="background-image: url('images/vitacimin-4.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Shop the Look Cottage Country Living Room</a></h3>
                            <p>A small river named Duden flows by their place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('head')
    
@endpush

@push('js')
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".product-box"), {
		max: 25,
		speed: 400
	});
	
</script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".product-box-2"), {
		max: 25,
		speed: 400
	});
	
</script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".product-box-3"), {
		max: 25,
		speed: 400
	});
	
</script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".product-box-4"), {
		max: 25,
		speed: 400
	});
	
</script>
@endpush