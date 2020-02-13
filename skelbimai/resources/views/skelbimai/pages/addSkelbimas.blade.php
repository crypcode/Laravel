@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Prideti skelbima</h1>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">

                    <h2 class="mb-5 text-black">Prideti skelbima</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/storead" enctype="multipart/form-data" class="p-5 bg-white">
                         @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="kategorija">Kategorija</label>
                                <select class="form-control" id="kategorija" name="kategorija">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->pavadinimas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Pavadinimas</label>
                                <input type="text" id="pavadinimas" name="pavadinimas" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="aprasymas">Aprasymas</label>
                                <input type="text" id="aprasymas" name="aprasymas" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="nuotrauka">Nuotrauka</label>
                                <input type="file" name="nuotrauka" id="nuotrauka" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="kaina">Kaina</label>
                                <input type="text" id="kaina" name="kaina" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="mail">El. pastas</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="phone">Telefonas</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="vieta">Vieta</label>
                                <input type="text" id="vieta" name="vieta" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Prideti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@stop