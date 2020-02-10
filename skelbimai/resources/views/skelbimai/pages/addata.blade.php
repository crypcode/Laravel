@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_2.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Koreguoti skelbima</h1>
                            <p class="mb-0">parduokite viska, kas jums nereikalinga</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md mb-5" data-aos="fade">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <form method="post" action="/adupdate/{{ $ad->id }}" class="p-5 bg-white">
                        @csrf
                        <input name="id" type="hidden" value="{{ $ad->id }}">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="kategorijos">Category ID</label>
                                <select name="kategorija" class="custom-select">

                                    <option>{{$ad->catid}}</option>

                                </select>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Title</label>
                                <input type="text" id="pavadinimas" name="pavadinimas" class="form-control" value="{{$ad->pavadinimas}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="aprasymas">Description</label>
                                <textarea name="aprasymas" id="aprasymas" "cols="30" rows="7" class="form-control">{{$ad->aprasymas}} </textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="nuotraukos">IMG</label>
                                <input type="file" name="nuotraukos" id="nuotraukos" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="kaina">Price</label>
                                <input type="text" id="kaina" name="kaina" value="{{$ad->price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" value="{{$ad->email}}" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="telefonoNr">Phone</label>
                                <input type="text" id="telefonoNr" value="{{$ad->phone}}" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="vieta">Location</label>
                                <input type="text" id="vieta" name="vieta" value="{{$ad->location}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Pataisyti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop