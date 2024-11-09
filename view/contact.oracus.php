<style>
    #loading-spinner {
        display: none;
        text-align: center;
        font-size: 1.5rem;
        color: #555;
    }

    #loading-spinner::before {
        content: "";
        width: 24px;
        height: 24px;
        border: 3px solid #555;
        border-top-color: transparent;
        border-radius: 50%;
        display: inline-block;
        animation: spin 1s linear infinite;
        margin-right: 8px;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Contact Us</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Information Section Start -->
<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Contact Item Start -->
                <div class="contact-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="contact-content">
                        <div class="contact-content-title">
                            <h2>address</h2>
                            <a href="#"><img src="<?php asset('images/icon-location.svg') ?>" alt=""></a>
                        </div>
                        <p>Enugu, Enugu State, Nigeria</p>
                    </div>
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/contact-info-1.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Contact Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Item Start -->
                <div class="contact-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="contact-content">
                        <div class="contact-content-title">
                            <h2>call now</h2>
                            <a href="tel:+2349091344893"><img src="<?php asset('images/icon-phone.svg') ?>" alt=""></a>
                        </div>
                        <p>(+234) 909 1344 893</p>
                    </div>
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/contact-info-2.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Contact Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Item Start -->
                <div class="contact-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="contact-content">
                        <div class="contact-content-title">
                            <h2>email us</h2>
                            <a href="mailto:contact@oracus.ng"><img src="<?php asset('images/icon-mail.svg') ?>"
                                    alt=""></a>
                        </div>
                        <p>contact&#64;oracus&#46;ng</p>
                    </div>
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="<?php asset('images/contact-info-3.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Contact Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Information Section End -->

<!-- Contact Us Section Start -->
<div class="contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Contact Details Section Start -->
                <div class="contact-details">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact us</h3>
                        <h2 class="text-anime-style-3">Get in touch with us today</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Details Body Start -->
                    <div class="contact-detail-body">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Ready to bring your ideas to life? Our team is
                            here to help you tackle challenges, explore opportunities, and create amazing results. Let’s
                            chat and see how we can make a difference together!</p>
                        <h3 class="wow fadeInUp" data-wow-delay="0.5s">follow us:</h3>
                        <ul class="wow fadeInUp" data-wow-delay="0.75s">
                            <li><a href="https://facebook.com/oracusng/"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://instagram.com/oracusng/"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/oracus-ng"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/oracusng/"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <!-- Contact Details Body End -->
                </div>
                <!-- Contact Details Section End -->
            </div>

            <div class="col-lg-6">
                <div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="first name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="last name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="email"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="subjects" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="msg" class="form-control" id="msg" rows="7" placeholder="message"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">send a message</button>
                                    <div id="msgSubmit" class="h3 text-left hidden"></div>
                                </div>
                            </div>
                        </form>
                        <div id="loading-spinner" style="display: none;">
                            <i class="fa fa-spinner fa-spin" style="font-size: 2rem;"></i>
                            <!-- Or use custom CSS spinner -->
                            Sending message...
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section End -->

<!-- Google Map Section Start -->
<div class="google-map wow fadeInUp" data-wow-delay="0.25s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126868.29328997571!2d7.4302343582650385!3d6.441002530459627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3cf887d1a25%3A0x9e342e82908e0c3d!2sEnugu!5e0!3m2!1sen!2sng!4v1731154523919!5m2!1sen!2sng"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Google Map Section End -->

<script>
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault();

        document.getElementById("msgSubmit").classList.add("hidden");

        let isValid = true;
        const requiredFields = document.querySelectorAll("#contactForm [required]");

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add("is-invalid");
            } else {
                field.classList.remove("is-invalid");
            }
        });

        if (!isValid) {
            document.getElementById("msgSubmit").innerHTML = "Please fill in all required fields.";
            document.getElementById("msgSubmit").classList.remove("hidden");
            return;
        }

        document.getElementById("loading-spinner").style.display = "block";
        document.querySelector("button[type='submit']").disabled = true;

        const formData = new FormData(this);

        fetch("app/Controller/ContactForm.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                document.getElementById("msgSubmit").innerHTML = data;
                document.getElementById("msgSubmit").classList.remove("hidden");
            })
            .catch(error => console.error("Error:", error))
            .finally(() => {
                document.getElementById("loading-spinner").style.display = "none";
                document.querySelector("button[type='submit']").disabled = false;
            });
    });

</script>