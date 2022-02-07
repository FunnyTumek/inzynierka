@extends('layouts.app')

@section('title','O nas')

@section('content')


    <!-- Mapa -->

    <div class="container my-4 pb-5 pt-lg-5">

        <h2 class="h1 pt-4">Kontakt z nami</h2>
        <p class="pb-4">Jeśli posiadasz jakieś pytania śmiało skontaktuj się z nami. Odpowiemy na wszystkie pytanie jakie Cię nurtują.</p>

        <div class="row">

            <div class="col-lg-5 mb-4">

                <div class="card">

                    <div class="card-body" style="position: relative;">
                        <!--Header-->
                        <div class="text-center" style="position: absolute; top: -30px;">
                            <div class="form-header blue accent-1 btn btn-info py-1 px-3">
                                <h3 class="text-center"><img src="icons/envelope-solid1.svg" class="social-icons" style="width: 20px"> Napisz do nas:</h3>
                            </div>
                        </div>

                        <div class="mt-3">Odpiszemy jak najszybciej na wszystkie pytania.</div>
                        <br>

                        <!--Body-->
                        <div class="md-form my-1">
                            <label for="form-name">Twoje imie</label>
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" class="form-control" placeholder="Imię">
                        </div>

                        <div class="md-form my-1">
                            <label for="form-email">Twój email</label>
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form-email" class="form-control" placeholder="Email">
                        </div>

                        <div class="md-form my-1">
                            <label for="form-text">Opis</label>
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea id="form-text" class="form-control md-textarea" placeholder="Opis" rows="3"></textarea>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-success">Zatwierdź</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">

                <!--Google map-->
                <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.1024019713864!2d22.54808431591755!3d51.235608938359555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47225777258f4a0f%3A0xc62fcb70b64cd71e!2sPolitechnika%20Lubelska%20Rektorat!5e0!3m2!1spl!2spl!4v1578851371756!5m2!1spl!2spl"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <br>
                <!--Buttons-->
                <div class="row text-center social-icons">
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><img src="icons/map-marker-alt-solid.svg"></a>
                        <p>Lublin, Nadbystrzycka 38D</p>
                        <p>Polska</p>
                    </div>

                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><img src="icons/phone-solid.svg"></a>
                        <p>+ 48 512 321 341</p>
                        <p>+ 48 412 412 312</p>
                    </div>

                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1"><img src="icons/envelope-solid.svg" class="social-icons"></a>
                        <p>silownia.info@gmail.com</p>
                        <p>silka@gmail.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
