@component('layouts.partners')

<header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('assets/videos/mbuland.mp4') }}" type="video/mp4">
        <source src="{{ asset('assets/videos/mbuland.ogm') }}" type="video/ogm">
        <source src="{{ asset('assets/videos/mbuland.webm') }}" type="video/webm">
    </video>

    <!-- The header content -->
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/Tai Logo - white.png" alt="Logo" />
                    </a>
                    <button class="navbar-toggler">
                        <span class="toggler-icon"> </span>
                        <span class="toggler-icon"> </span>
                        <span class="toggler-icon"> </span>
                    </button>

                    <div class="navbar-collapse">
                        <ul id="nav" class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#home">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#about">ABOUT US</a>
                            </li>

                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#about">OUR WORK</a>
                            </li>

                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#about">PROJECTS</a>
                            </li>

                        </ul>
                    </div>

                    <div class="navbar-btn d-none d-sm-inline-block">
                        <a class="ud-main-btn ud-white-btn" href="javascript:void(0)">
                            Donate
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row" style="margin-top: 60px !important">
            <div class="col-lg-12">
                <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
                    <h1 class="ud-hero-title">
                        Inspiring Social Change through Storytelling
                    </h1>
                    <p class="ud-hero-desc">
                        We use storytelling and media technology to promote positive outcomes in health, education and
                        social justice.
                    </p>
                    <ul class="ud-hero-buttons">
                        <li>
                            <a href="https://links.uideck.com/play-bootstrap-download" rel="nofollow noopener"
                                target="_blank" class="ud-main-btn ud-white-btn">
                                Donate
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/uideck/play-bootstrap" rel="nofollow noopener" target="_blank"
                                class="ud-main-btn ud-link-btn" style="background: transparent;">
                                Watch Mbuland<i class="lni lni-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- ====== Features Start ====== -->
<section id="features" class="ud-features" style="padding-bottom: 0px !important">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ud-section-title">
                    <span style="color: black">OUR WORK</span>
                    <h2>Stories have the power to <br> change the world</h2>
                    <div class="text-center" style="max-width: 100%">
                        <p>
                            We are pioneers in the field of Social and Behavioral Change Communication (SBCC) <br> in
                            Tanzania.
                            We write compelling human-centred narratives and present them <br> in form of 3D animations,
                            comic
                            strip posters and radio plays with the aim of encouraging <br> positive social behavioural
                            change.
                            Our strategic use of stories allows us to <br> appeal to a broad audience while our focus on
                            education remains true to our mission <br> of increasing youth participation in addressing
                            social and
                            economic <br> development challenges in Tanzania.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    {{-- <div class="ud-feature-icon text-center">
                        <i class="lni lni-gift"></i>
                    </div> --}}
                    <div class="ud-feature-content">
                        <h3 class="ud-feature-title" style="font-size: 40px">13</h3>
                        <p class="ud-feature-desc">
                            Animation videos created
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    {{-- <div class="ud-feature-icon">
                        <i class="lni lni-gift"></i>
                    </div> --}}
                    <div class="ud-feature-content">
                        <h3 class="ud-feature-title" style="font-size: 40px">13</h3>
                        <p class="ud-feature-desc">
                            Scolarships given
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    {{-- <div class="ud-feature-icon">
                        <i class="lni lni-gift"></i>
                    </div> --}}
                    <div class="ud-feature-content">
                        <h3 class="ud-feature-title" style="font-size: 40px">1000</h3>
                        <p class="ud-feature-desc">
                            Youths reached
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                <img src="{{ asset('assets/images/tai-kids.png') }}" alt="..">
            </div>
        </div>
    </div>
</section>
<!-- ====== Features End ====== -->


<!-- ====== About Start ====== -->
<section id="about" class="ud-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ud-section-title">
                    <span style="color: white">OUR DONATIONS</span>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp text-center" data-wow-delay=".2s">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="{{ asset('assets/blog-images/image-4.png') }}" alt="...">
                <br><br>
                <h2 style="font-size: 20px; color: white">Mbuland Marathon Drive</h2>
                <p style="color: white; font-size: 13">
                    End date: 19th November
                </p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="{{ asset('assets/blog-images/image-4.png') }}" alt="...">
                <br><br>
                <h2 style="font-size: 20px; color: white">Mbuland Marathon Drive</h2>
                <p style="color: white; font-size: 13">
                    End date: 19th November
                </p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="{{ asset('assets/blog-images/image-4.png') }}" alt="...">
                <br><br>
                <h2 style="font-size: 20px; color: white">Mbuland Marathon Drive</h2>
                <p style="color: white; font-size: 13">
                    End date: 19th November
                </p>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                <br><br>
                <a href="#" style="background: white; color: black" rel="nofollow noopener" target="_blank"
                    class="ud-main-btn ud-white-btn">
                    Donate
                </a>
            </div>

        </div>
    </div>
</section>
<!-- ====== About End ====== -->

<!-- ====== Work Start ====== -->
<section id="about" class="ud-features">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ud-section-title">
                    <span style="color: black">OUR STORIES</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/blog-images/image-4.png') }}" alt="...">
                <br><br>
                <h2 style="font-size: 20px">NAWEZA Press Release</h2> <br>

                <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-dark-btn"
                    style="background: transparent;">
                    Learn more<i class="lni lni-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/blog-images/image-1.jpeg') }}" style="max-width:300px" alt="...">
                <br><br>
                <h2 style="font-size: 20px">Empowering The Girl Child In The Digital Generational</h2>

                <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-dark-btn"
                    style="background: transparent;">
                    Learn more<i class="lni lni-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/blog-images/image-1536x1022.jpeg') }}" style="max-width:300px" alt="...">
                <br><br>
                <h2 style="font-size: 20px">Coming together to tackle Gender-Based Violence in Tanzania</h2>

                <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-dark-btn"
                    style="background: transparent;">
                    Learn more<i class="lni lni-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- ====== Work End ====== -->

<!-- ====== About Start ====== -->
<section id="features" class="ud-features" style="background:#c85a48">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="ud-about-title">
                    {{-- <span style="color: white">About Us</span> --}}
                    <h2 style="color: white;font-size: 50px !important">
                        Power of Innovative Storytelling
                    </h2>
                    <br>
                    <p style="text-align: justify; color: white">
                        We are a youth-led NGO in Dar es Salaam, Tanzania
                        aspiring for social behavioural change and growth
                        by contributing to projects that bring positive
                        change in our communities. We use 3D Animations,
                        Radio Dramas & Comics to deliver crucial messages
                        to the community, especially adolescents in Tanzania.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center">
                <iframe width="100%" height="325" src="https://www.youtube.com/embed/NjQfWJVpwhU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>
<!-- ====== About End ====== -->

<!-- ====== Friends Start ====== -->
<section id="about" class="ud-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ud-section-title">
                    <span style="color: black">FRIENDS OF TAI</span>
                    <h2>Partners we are proud to <br> work with</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-6 text-center d-flex flex-column justify-content-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/logos/camara edu logo.png') }}" class="tai-partners" alt="">
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 d-flex flex-column justify-content-center text-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/logos/USADF Logo.png') }}" class="tai-partners" style="max-width: 100px"
                        alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 text-center d-flex flex-column justify-content-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/logos/Segal Logo.png') }}" style="max-width: 120px" class="tai-partners"
                        alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 d-flex flex-column justify-content-center text-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/logos/UNESCO_logo_hor_blue.png') }}" style="max-width: 200px"
                        class="tai-partners" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 text-center d-flex flex-column justify-content-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img class="tai-partners" src="{{ asset('assets/logos/Duke UNICEF Logo.png') }}"
                        style="max-width: 220px;" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 d-flex flex-column justify-content-center">
                <div class="ud-single-feature text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/logos/FCS LOGO2_0.png') }}" style="max-width: 220px" class="tai-partners"
                        alt="">
                </div>
            </div>

        </div>
</section>
<!-- ====== About End ====== -->


<!-- ====== Contact Start ====== -->
<section id="contact" class="ud-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="ud-contact-content-wrapper">
                    <div class="ud-contact-title">
                        <span style="color: white">CONTACT US</span>
                        <h2 style="color: white">
                            Be the First to <br> Hear Our Stories
                        </h2>
                    </div>
                    <div class="ud-contact-info-wrapper">
                        <div class="ud-single-info">
                            <div class="ud-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="ud-info-meta">
                                <h5>Our Location</h5>
                                <p>48 Msikitini Street, Mikocheni B, P.O. Box 54631, Kinondoni,
                                    Dar es Salaam</p>

                            </div>
                        </div>
                        <div class="ud-single-info">
                            <div class="ud-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="ud-info-meta">
                                <h5>How Can We Help?</h5>
                                <p>info@tai.or.tz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="ud-contact-form-title">Send us a Message</h3>
                    <form class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">Full Name*</label>
                            <input type="text" name="fullName" placeholder="Adam Gelius" />
                        </div>
                        <div class="ud-form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" placeholder="example@yourmail.com" />
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn" style="background: #c85a48">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact End ====== -->

@endcomponent
