<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiro Agency Landing Page</title>
    <link rel="stylesheet" href="{{asset('assets/front/assets/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/assets/css/style.css')}}">
    <script src="{{asset('assets/front/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/front/assets/js/loader.js')}}"></script>
</head>

<body>
    <div class="hiro-loader"></div>
    <header class="hiro-header home-header" id="top">
        <nav>
            <div class="container">
                <div class="hiro-nav">
                    <a href="index.html" class="nav-brand">
                        <img src="{{asset('assets/front/assets/images/logo.svg')}}" alt="Hiro" class="logo">
                        <img src="{{asset('assets/front/assets/images/logo_white.svg')}}" alt="Hiro" class="logo-white">
                    </a>
                    <button class="hiro-nav-popup-toggle">
                        <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Hiro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="hiro-agency" transform="translate(-964.000000, -37.000000)" fill="#FFFFFF">
                                    <g id="Menu" transform="translate(964.000000, 37.000000)">
                                        <g id="menu">
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="7.50795322" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="14.9964327" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="0.0194736842" width="19.9609942" height="2.4951462"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container wow fadeInUp">
            <div id="hiroHeaderCarousel" class="hiro-header-carousel carousel slide" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="01"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('assets/front/assets/images/avatar.jpg')}}" alt="Remarkable Digital Products" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="02"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('assets/front/assets/images/avatar.jpg')}}" alt="<span>Remarkable Digital Products</span>" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="03"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('assets/front/assets/images/avatar.jpg')}}" alt="Remarkable Digital Products" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#hiroHeaderCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#hiroHeaderCarousel" data-slide-to="1"></li>
                    <li data-target="#hiroHeaderCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </header>
    <div class="hiro-nav-popup-modal">
        <div class="hiro-nav-popup-modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 menu-wrapper">
                        <ul class="nav hiro-main-nav">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="nav-link">Works</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 blog-posts text-white">
                        <h5 class="popup-blog-headng">Blog</h5>
                        <div class="media mb-4">
                            <img src="{{asset('assets/front/assets/images/Blog_small2.jpg')}}" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">Ambitious <br> designs</h5>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="{{asset('assets/front/assets/images/Blog_small1.jpg')}}" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">The Collection <br> Cover Archive</h5>
                            </div>
                        </div>
                        <p><a href="blog.html" class="text-white link-hover-fx text-decoration-none" class="font-weight-medium">View more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-primary hiro-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center wow fadeInUp">
                    <h2 class="section-title mb-3">Digital Product Design</h2>
                    <p class="section-text-ct">We take products through every stage necessary for their creation – Product Discovery, Business and User Research, UX/UI Design, Prototyping, Usability Testing, and future Product Improvements.</p>
                </div>
                <div class="col-md-6 wow fadeInUp">
                    <img src="{{asset('assets/front/assets/images/img_3.png')}}" class="w-100 mb-5" alt="Digital Product Design">
                    <p class="section-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="hiro-btn-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section class="hiro-section" id="services">
        <div class="container">
            <div class="service-section">
                <h2 class="section-title career-section-title">Our Services</h2>
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Strategy</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Design</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Development</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section hiro-section" id="works">
        <div class="container">
            <div class="row">
                <div class="col-md-6wow fadeInUp">
                    <div class="project-card wow fadeInUp">
                        <img src="{{asset('assets/front/assets/images/Works4.png')}}" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                    <div class="project-card wow fadeInUp">
                        <img src="{{asset('assets/front/assets/images/Works2.png')}}" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                </div>
                <div class="col-md-6 project-column-indented">
                    <div class="project-card wow fadeInUp">
                        <img src="{{asset('assets/front/assets/images/Works3.png')}}" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                    <div class="project-card wow fadeInUp">
                        <img src="{{asset('assets/front/assets/images/Works1.png')}}" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                </div>
                <div class="col-12">
                    <a href="#!" class="load-more-link">VIEW ALL PROJECTS</a>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section hiro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <h2 class="section-title">Meet <br> The Team</h2>
                    <p class="section-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <div>
                        <a class="carousel-control-prev" href="#hiroTeamCarousel" role="button" data-slide="prev">
                            <img src="{{asset('assets/front/assets/images/arrow_left.png')}}" alt="left arrow" width="20px">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#hiroTeamCarousel" role="button" data-slide="next">
                            <img src="{{asset('assets/front/assets/images/Arrow_right.png')}}" alt="right arrow" width="20px">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 wow fadeInRight">
                    <div id="hiroTeamCarousel" class="hiro-team-carousel carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="{{asset('assets/front/assets/images/img_5.png')}}" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-member-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="team-card featured" data-animation="animated flipInY">
                                            <img src="{{asset('assets/front/assets/images/img_4.png')}}" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-member-title">CTO, Co-Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="{{asset('assets/front/assets/images/img_5.png')}}" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-meber-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="team-card featured" data-animation="animated flipInY">
                                            <img src="{{asset('assets/front/assets/images/img_4.png')}}" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-meber-title">CTO, Co-Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="{{asset('assets/front/assets/images/img_5.png')}}" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-meber-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-animation="animated flipInY">
                                        <div class="team-card featured">
                                            <img src="{{asset('assets/front/assets/images/img_4.png')}}" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-meber-title">CTO, Co-Founder</p>
                                            </div>
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
    <section class="career-section hiro-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title wow fadeInLeft">
                        Career <br> Work with us
                    </h2>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <p class="section-text-ct mb-5">Our work transforms how customers experience your business – creating distinction, shifting perceptions and driving growth.</p>
                    <button class="hiro-btn-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section hiro-section">
        <div class="container wow fadeInUp">
            <h6 class="font-weight-semibold mb-4 mb-md-0">At Explose, it’s always storytelling time. Swing by & share yours.</h6>
            <h2 class="section-title">Let’s talk</h2>
            <div class="contact-address">
                <div class="row">
                    <div class="col-md-5">
                        <p class="font-weight-medium">9010 Varna, Bulgaria, <br> Breeze Borough, <br> Saint Nicholas, 26</p>
                    </div>
                    <div class="col-md-5 mb-4 mb-md-0">
                        <p class="font-weight-medium">UK: +44 567 637 0000 <br> hey@costomarl.com</p>
                        <ul class="nav contact-social-links">
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="{{asset('assets/front/assets/images/twitter@1x.svg')}}" alt="twitter">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="{{asset('assets/front/assets/images/linkedin@1x.svg')}}" alt="linkedin">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="{{asset('assets/front/assets/images/facebook@1x.svg')}}" alt="facebook">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="{{asset('assets/front/assets/images/behance@1x.svg')}}" alt="behance">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="{{asset('assets/front/assets/images/medium@1x.svg')}}" alt="medium">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <a href="#top" class="go-top-btn">
                            <img src="{{asset('assets/front/assets/images/arrow_up@1x.svg')}}" alt="arrow up">
                            <span class="sr-only">Go to top</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="hiro-footer wow fadeInUp">
        <div class="container d-flex flex-wrap justify-content-lg-between align-items-center">
            <p class="mb-0 footer-text">© <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a> 2020. All rights reserved.</p>
            <nav class="footer-nav nav">
                <a href="#!" class="nav-link">Terms and Conditions</a>
                <a href="#!" class="nav-link">Privacy Policy</a>
                <a href="#!" class="nav-link">Cookie Policy</a>
            </nav>
        </div>
    </footer>

    <script src="{{asset('assets/front/assets/vendors/wowjs/wow.min.js')}}"></script>
    <script src="{{asset('assets/front/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('assets/front/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/assets/js/main.js')}}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>