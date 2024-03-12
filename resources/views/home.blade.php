<x-front-layout titel="home page">

    <x-slot name="header">
        <h1>hi</h1>
    </x-slot>

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
</x-front-layout>