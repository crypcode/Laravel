@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Kategorijos</h1>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kategorijos</th>
                    <th scope="col">Veiksmai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->pavadinimas}}</td>
                    <td><a href="#">Salinti</a></td>
                </tr>
                @endforeach
            </tbody>
    </table>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary" href="/pridetikategorija" role="button">Prideti kategorija</a>
        </div>
     <br>
            </div>
        </div>
    </div>

@stop