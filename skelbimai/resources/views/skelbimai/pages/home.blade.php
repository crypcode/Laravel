@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12">


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1 class="" data-aos="fade-up">Sveiki atvykę į Skelbimai24</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Šūkis bus čia. </p>
                        </div>
                    </div>

                    <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                        <form method="post">
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                    <input type="text" class="form-control rounded" placeholder="Ko ieškosime?">
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" class="form-control rounded" placeholder="Vieta">
                                    </div>

                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control rounded" name="" id="">
                                            <option value="">Visos kategorijos</option>
                                            <option value="">Nekilnojamas turtas</option>
                                            <option value="">Knygos</option>
                                            <option value="">Baldai</option>
                                            <option value="">Elektronika</option>
                                            <option value="">Transporto priemonės</option>
                                            <option value="">Kita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Paieška">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
                        <div class="col-12">
                            <h2 class="d-inline-block">Populiarios paieškos:</h2>
                            <a href="#">iPhone</a>
                            <a href="#">Golf</a>
                            <a href="#">Asus</a>
                            <a href="#">Lova</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">Naujausi skelbimai</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Cars &amp; Vehicles</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">New Black Car</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Real Estate</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Own New House</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Furniture</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Electronics</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Cars &amp; Vehicles</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">New Black Car</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Real Estate</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Own New House</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Furniture</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Electronics</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Populiarios kategorijos</h2>
                    <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
                </div>
            </div>
            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-car"></span></span>
                            <span class="caption mb-2 d-block">Transporto priemonės</span>
                            <span class="number">1,921</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-closet"></span></span>
                            <span class="caption mb-2 d-block">Baldai</span>
                            <span class="number">2,339</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-home"></span></span>
                            <span class="caption mb-2 d-block">Nekilnojamas turtas</span>
                            <span class="number">4,398</span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-open-book"></span></span>
                            <span class="caption mb-2 d-block">Knygos</span>
                            <span class="number">3,298</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-tv"></span></span>
                            <span class="caption mb-2 d-block">Elektronika</span>
                            <span class="number">`2,932</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-pizza"></span></span>
                            <span class="caption mb-2 d-block">Kita</span>
                            <span class="number">183</span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="newsletter bg-primary py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Naujienlaiškis</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-6">

                    <form class="d-flex">
                        <input type="text" class="form-control" placeholder="El.pastas">
                        <input type="submit" value="Prenumeruoti" class="btn btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop