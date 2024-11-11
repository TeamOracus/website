<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Services</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">services</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Our Services Section Start -->
<div class="our-services page-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Web Development</h2>
                            <a href="/services?service=web-development"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>Building fast, sleek, and responsive websites that turn visitors into customers—whether you
                            need a stunning portfolio or a full-blown e-commerce platform, we've got you covered!</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-1.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Digital Marketing</h2>
                            <a href="/services?service=digital-marketing"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>From SEO to social media campaigns, we’ll help your brand shine across the web. Let’s boost
                            your visibility and get those clicks rolling in!</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-2.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Mobile App Development</h2>
                            <a href="/services?service=mobile-app"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>Need an app? We create user-friendly, intuitive mobile experiences that your customers will
                            love—whether it’s iOS, Android, or cross-platform.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-4.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Social Media Management</h2>
                            <a href="/services?service=social-media"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>We’ll manage your social media like pros—creating engaging posts, running ads, and keeping
                            your audience hooked. It’s time to go viral!</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-3.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Networking Services</h2>
                            <a href="/services?service=networking"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>Setting up a robust, secure, and reliable network for your business? Whether it’s wired or
                            wireless, we ensure you’re always connected—seamlessly!</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-5.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Branding/Graphics Design</h2>
                            <a href="/services?service=branding"><img src="<?php asset('images/arrow.svg') ?>" alt=""></a>
                        </div>
                        <p>Your brand deserves to stand out. From logo design to full brand identity, we create visuals
                            that leave a lasting impression and make your brand pop!</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/service-img-6.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->

@php View::render('sections.overview'); @endphp

@php View::render('sections.partners'); @endphp

@php View::render('sections.why-us'); @endphp

@php View::render('sections.testimonials'); @endphp