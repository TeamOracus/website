<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">About Us</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page About Section Start -->
<div class="page-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="page-about-image">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="<?php asset('images/page-about-1.jpg') ?>" alt="">
                        </figure>
                    </div>
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="<?php asset('images/page-about-2.jpg') ?>" alt="">
                        </figure>
                    </div>
                    <div class="work-experience">
                        <div class="work-experience-icon">
                            <img src="<?php asset('images/icon-work-experience.svg') ?>" alt="">
                        </div>
                        <div class="work-experience-content">
                            <h3><span class="counter">8</span>yrs+</h3>
                            <p>Work Experience</p>
                        </div>
                    </div>
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-3">We are more than just a digital agency</h2>
                    </div>
                    <!-- Section Title End -->
                    <p class="wow fadeInUp" data-wow-delay="0.5s">We are Team Oracus, we combine strategy, creativity,
                        innovation, and design to solve the most complex business challenges.</p>

                    <p class="wow fadeInUp" data-wow-delay="0.25s">Since we kicked off our journey in 2018, we've been
                        all about crafting cutting-edge solutions that not only drive success but also bring a smile to
                        businesses of all sizes. Our passionate team is here to deliver personalized services that fit
                        your unique needs like a glove!</p>

                    <p class="wow fadeInUp" data-wow-delay="0.75s">At Team Oracus, we’re not just about getting the job
                        done; we’re here to make your business journey exciting and rewarding! We thrive on creativity
                        and innovation, helping you navigate the wild world of business with flair and confidence!</p>


                    <ul class="wow fadeInUp" data-wow-delay="1s">
                        <li>Proven track record of success</li>
                        <li>Expert team with diverse skills</li>
                        <li>Commitment to innovation and excellence</li>
                        <li>Client-Centric Approach</li>
                        <li>Data-Driven Insights</li>
                        <li>Comprehensive Industry Knowledge</li>
                    </ul>
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page About Section End -->

@php View::render('sections.why-us'); @endphp

@php View::render('sections.partners'); @endphp

@php View::render('sections.overview'); @endphp

@php View::render('sections.team'); @endphp

<!-- Scrolling Ticker Section Start -->
<div class="scrolling-ticker">
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><i class="fa-solid fa-circle"></i>Web Development</span>
            <span><i class="fa-solid fa-circle"></i>Social Media Management</span>
            <span><i class="fa-solid fa-circle"></i>App Development</span>
            <span><i class="fa-solid fa-circle"></i>Digital Marketing</span>
            <span><i class="fa-solid fa-circle"></i>SEO Optimization</span>
            <span><i class="fa-solid fa-circle"></i>Graphics Design</span>
            <span><i class="fa-solid fa-circle"></i>Networking Services</span>
        </div>

        <div class="scrolling-content">
            <span><i class="fa-solid fa-circle"></i>Web Development</span>
            <span><i class="fa-solid fa-circle"></i>Social Media Management</span>
            <span><i class="fa-solid fa-circle"></i>App Development</span>
            <span><i class="fa-solid fa-circle"></i>Digital Marketing</span>
            <span><i class="fa-solid fa-circle"></i>SEO Optimization</span>
            <span><i class="fa-solid fa-circle"></i>Graphics Design</span>
            <span><i class="fa-solid fa-circle"></i>Networking Services</span>
        </div>
    </div>
</div>
<!-- Scrolling Ticker Section End -->

@php View::render('sections.testimonials'); @endphp