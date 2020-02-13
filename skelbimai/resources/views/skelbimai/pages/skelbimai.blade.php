@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Ads Listings</h1>
                            <p class="mb-0">Choose product you want</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
                        @foreach($ads as $ad)
                            <div class="col-lg-6">

                                <div class="d-block d-md-flex listing vertical">
                                    <a href="/skelbimas/{{$ad->id}}" class="img d-block" style="background-image: url({{ 'storage/'.$ad->nuotrauka }})"></a>
                                    <div class="lh-content">
                                        <span class="category">{{$ad->category}}</span>
                                        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                        <a href="/skelbimas/{{$ad->id}}"><h3>{{$ad->pavadinimas}}</h3></a>
                                        <p>{{$ad->price}}</p>
                                        <address>{{$ad->location}}</address>
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
                        @endforeach





                    </div>

                    <div class="col-12 mt-5 text-center">
                            {{$ads->links()}}
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    <div class="newsletter bg-primary py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-6">

                    <form class="d-flex">
                        <input type="text" class="form-control" placeholder="Email">
                        <input type="submit" value="Subscribe" class="btn btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
