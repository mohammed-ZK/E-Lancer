<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titel}}</title>
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
        {{$header}}
        {{$slot}}
    </header>
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