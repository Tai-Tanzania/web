<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Tai Tanzania | Parners">
    <meta name="description" content="Site for Friends of Tai">

    <!-- Open Graph / Facebook -->
    {{-- <meta property="og:type" content="website">
    <meta property="og:url" content="https://uideck.com/play/">
    <meta property="og:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
    <meta property="og:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
    <meta property="og:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg"> --}}

    <!-- Twitter -->
    {{-- <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://uideck.com/play/">
    <meta property="twitter:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
    <meta property="twitter:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
    <meta property="twitter:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg"> --}}

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/tai-favocon.png') }}" type="image/png" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ud-styles.css?v.5') }}" />
</head>

<body>

    <!-- navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/Tai Logo - black.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Who we are
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/about">Our Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="/history">History</a></li>
                            {{-- <li><a class="dropdown-item" href="/strategy">Strategy</a></li> --}}
                            <li><a class="dropdown-item" href="/approach">Approach</a></li>
                            <li><a class="dropdown-item" href="/team">Team</a></li>
                            {{-- <li><a class="dropdown-item" href="/reports">Annual Reports</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">What we do</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            How we do it
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/animations">Animations</a></li>
                            <li><a class="dropdown-item" href="/comics">Storytelling for Social Change</a></li>
                            <li><a class="dropdown-item" href="/community">Community Involvement</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Take action
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/sponsor">Sponsor a child</a></li>
                            {{-- <li><a class="dropdown-item" href="/story">Tell a story</a></li> --}}
                            <li><a class="dropdown-item" href="/careers">Careers</a></li>
                            <li><a class="dropdown-item" href="/partner">Our partners</a></li>
                        </ul>
                    </li>
                </ul>
                {{-- <div class="d-flex">
                    <a class="ud-main-btn ud-white-btn" target="_blank" style="background: #6c4130"
                        href="https://kbfus.networkforgood.com/projects/53825-t-kbfus-funds-tai-tanzania-tz">
                        Donate
                    </a>
                </div> --}}
            </div>
        </div>
    </nav>
    <!-- end of navigation-->


    {{ $slot }}

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
    
        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="index.html" class="ud-footer-logo">
                                <img src="{{ asset('assets/images/Tai Logo - white.png') }}" alt="logo" />
                            </a>
                            <p class="ud-widget-desc">
                                We use storytelling and media technology to promote positive outcomes in health,
                                education and social justice.
                            </p>
                            <ul class="ud-widget-socials">
                                <li>
                                    <a href="https://web.facebook.com/taitanzania/">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/taitanzania">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/taitanzania/?hl=en">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/c/TaiTanzaniay">
                                        <i class="lni lni-youtube-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">About Us</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Features</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">About</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Features</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="javascript:void(0)">How it works</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Terms of service</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Refund policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Our Products</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="https://lineicons.com/" rel="nofollow noopner" target="_blank">Lineicons
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ecommercehtml.com/" rel="nofollow noopner"
                                        target="_blank">Ecommerce HTML</a>
                                </li>
                                <li>
                                    <a href="https://ayroui.com/" rel="nofollow noopner" target="_blank">Ayro UI</a>
                                </li>
                                <li>
                                    <a href="https://graygrids.com/" rel="nofollow noopner" target="_blank">Plain
                                        Admin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            <li>
                                <a href="javascript:void(0)">Privacy policy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Support policy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Terms of service</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        {{-- <p class="ud-footer-bottom-right">
                            Designed and Developed by
                            <a href="https://uideck.com" rel="nofollow">UIdeck</a>
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

    </script>
</body>

</html>
