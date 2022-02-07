@extends('layouts.app')

@section('title','Strona główna')

@section('content')

    <!-- Photka -->
    <div id="carouselExampleCaptions" class="carousel slide shadow" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photo/2.jpg" class="d-block w-100 h-100">
                <div class="carousel-caption d-md-block" style="top: 45%; bottom: 55%;">
                    <a type="button" class="btn btn-light btn-lg" href="{{ route('register') }}">{{ __('Dołącz do nas!') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!--Opis i zdj -->


    <div class="container my-5 py-5 z-depth-1">

        <div class="dark-grey-text text-center">

            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Sport jest bardzo ważny.</h3>
            <hr class="w-header">
            <h5 class="font-weight-bold font-italic mb-5">Uprawiaj codzinnie sport, aby przedłużyć dobry komfort życia, bez
                bólu.</h5>

            <div class="row mx-lg-5 mx-md-3">
                <div class="col-md-6 mb-4">

                    <div class="view mb-5">
                        <img src="photo/pompka.jpg" class="img-fluid shadow-lg" alt="smaple image"
                             style="border-radius: 10px">
                    </div>

                    <h5 class="font-weight-normal text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor.</h5>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="view mb-5">
                        <img src="photo/koibeta2.jpg" class="img-fluid shadow-lg" alt="smaple image"
                             style="border-radius: 10px">
                    </div>

                    <h5 class="font-weight-normal text-muted">Ut enim ad minim veniam, quis nostrud ut aliquip ex ea commodo
                        consequat.</h5>

                </div>
            </div>

        </div>


    </div>


    <!-- BMI -->

    <div style="background-image: url('public/photo/back.png'); background-size: cover">
        <div class="container py-4 ">

            <div class="row mx-lg-n5">

                <div class="col py-2 px-lg-5">

                    <div class="container-lg ">

                        <h3 class="text-center font-weight-bolder">OBLICZ SWOJE BMI</h3>
                        <ul class="nav nav-pills my-3 nav-fill" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-outline-success" id="pills-home-tab" data-toggle="pill"
                                   href="#pills-mezczyzni"
                                   role="tab" aria-controls="pills-home" aria-selected="true">Mężczyzna</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn btn-outline-warning ml-2 " id="pills-profile-tab" data-toggle="pill"
                                   href="#pills-mezczyzni"
                                   role="tab" aria-controls="pills-profile" aria-selected="false">Kobieta</a>
                            </li>
                        </ul>
                    </div>
                    <form id="calculatorForm" method="post">
                        <div class="tab-content py-3" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-mezczyzni" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="col-md-6 offset-md-3">
                                    <label>Waga w kg<input type="text" name="waga" class="form-control"
                                                           placeholder="kg"></label><br>
                                    <label>Wzrost w cm<input type="text" name="wzrost" class="form-control"
                                                             placeholder="cm"></label><br>
                                    <input type="submit" class="btn btn-success" value="oblicz">
                                    <input type="reset" class="btn btn-success" value="reset">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">Twoje BMI to
                        <div>
                            <span class="border"><a id="result">0.0</a></span>
                        </div>
                    </div>
                </div>

                <div class="col py-3 px-lg-5">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">BMI</th>
                            <th scope="col">KLASYFIKACJA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">< 18.5</th>
                            <td>Niedowaga</td>
                        </tr>
                        <tr>
                            <th scope="row">18.5 – 24.9</th>
                            <td>Normal Weight</td>
                        </tr>
                        <tr>
                            <th scope="row">25.0 – 29.9</th>
                            <td>Nadwaga</td>
                        </tr>
                        <tr>
                            <th scope="row">30.0 – 34.9</th>
                            <td>Pierwszy Stopień Otyłości</td>
                        </tr>
                        <tr>
                            <th scope="row">35.0 – 39.9</th>
                            <td>Drugi Stopień Otyłości</td>
                        </tr>
                        <tr>
                            <th scope="row">≥ 40.0</th>
                            <td>Trzecia Klasa Otyłości</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

