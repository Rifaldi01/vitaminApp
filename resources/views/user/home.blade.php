@extends('layouts.master')
@section('content')
<div class="card-head text-center mt-4">
    <span class="subheading ">Our Product</span>
    <h3 class="text-center  mb-2  ">Types Of Products</h3>
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
                    <span class="subheading">About Vitacimin</span>
                    <h2 class="mb-4">Vitacimin bermanfaat untuk menjaga kesehatan dan membantu memenuhi kebutuhan tubuh terhadap vitamin C</h2>
                    <p>Vitacimin mengandung vitamin C, vitamin E, dan L-cysteine yang berperan sebagai antioksidan untuk menangkal radikal bebas, serta vitamin B6 (pyridoxine) dan nicotinamide yang berguna memperbaiki metabolisme tubuh.</p>
                    <p>Vitacimin juga mengandung vitamin B2 (riboflavin) dan calcium pantothenate yang berfungsi membantu proses pembentukan energi.</p>
                    <p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                </div>
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
                                    <p class="mb-4">Rasanya anjim banget bikin JJ gemeter meriang waw membantai segala harapan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Bagus Nurmalem</p>
                                            <span class="position">Tampan & Pemberani</span>
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
                                    <p class="mb-4">Rasanya anjim banget bikin JJ gemeter meriang waw membantai segala harapan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Epul Emul</p>
                                            <span class="position">aowkowwo epul</span>
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
                                    <p class="mb-4">Rasanya anjim banget bikin JJ gemeter meriang waw membantai segala harapan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Ajri Gaming</p>
                                            <span class="position">Gamers Ganteng Idaman</span>
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
                                    <p class="mb-4">Rasanya anjim banget bikin JJ gemeter meriang waw membantai segala harapan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Reksi Muhammad Sidiq</p>
                                            <span class="position">Pedofilia</span>
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
                                    <p class="mb-4">Rasanya anjim banget bikin JJ gemeter meriang waw membantai segala harapan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Deden Alif</p>
                                            <span class="position">DedenAlif123456</span>
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
                            <h3 class="heading mb-3"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiCkqn2p8n1AhWwT2wGHa6OAGAQFnoECAMQAQ&url=https%3A%2F%2Fwww.halodoc.com%2Fobat-dan-vitamin%2Fvitacimin-500-mg-rasa-lemon-2-tablet&usg=AOvVaw12PwBVDC8sPWiOS07rlI1s">Viacimin - Manfaat, dosis & efek samping</a></h3>
                            <p>Alodokter</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('images/vitacimin-2.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiCkqn2p8n1AhWwT2wGHa6OAGAQFnoECAMQAQ&url=https%3A%2F%2Fwww.halodoc.com%2Fobat-dan-vitamin%2Fvitacimin-500-mg-rasa-lemon-2-tablet&usg=AOvVaw12PwBVDC8sPWiOS07rlI1s">Vitacimin 500 mg Rasa Lemon 2 Tablet</a></h3>
                            <p>Halodoc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img order-lg-last" style="background-image: url('images/vitacimin-3.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiCkqn2p8n1AhWwT2wGHa6OAGAQFnoECEoQAQ&url=https%3A%2F%2Fwww.klikdokter.com%2Fobat%2Fvitacimin&usg=AOvVaw1fFjN726Y5bZSvh6QBPTbh">Obat Vitacimin - Dosis, Pemakaian, Efek Samping</a></h3>
                            <p>Klikdokter</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="blog-entry justify-content-end d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img order-lg-last" style="background-image: url('images/vitacimin-4.png');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Jan. 27, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiCkqn2p8n1AhWwT2wGHa6OAGAQFnoECAMQAQ&url=https%3A%2F%2Fwww.halodoc.com%2Fobat-dan-vitamin%2Fvitacimin-500-mg-rasa-lemon-2-tablet&usg=AOvVaw12PwBVDC8sPWiOS07rlI1s">Tablet Hisap VITACIMIN</a></h3>
                            <p>Mandjur</p>
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
