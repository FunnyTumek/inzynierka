@extends('layouts.app')

@section('title','O nas')

@section('content')

    <!-- Photka -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photo/tlo.jpg" class="d-block w-100 h-100 mt-5">
            </div>
        </div>
    </div>


    <!-- Drugi pasek -->

    <div class="container-lg">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-trenery"
                   role="tab" aria-controls="pills-home" aria-selected="true">Trenerzy</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link ml-2" id="pills-profile-tab" data-toggle="pill" href="#pills-dietetycy"
                   role="tab" aria-controls="pills-profile" aria-selected="false">Dietetycy</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link ml-2" id="pills-pracownicy-tab" data-toggle="pill"
                   href="#pills-pracownicy"
                   role="tab" aria-controls="pills-contact" aria-selected="false">Pracownicy</a>
            </li>
        </ul>
    </div>


    <!-- Trenerzy/Dietetycy/Pracownicy -->

    <div class="container-lg">
        <div class="tab-content" id="pills-tabContent">

            <!-- Trenerzy -->
            <div class="tab-pane fade show active" id="pills-trenery" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container my-5">
                    <div class="team-section text-center dark-grey-text">
                        <h3 class="font-weight-bold pb-2 mb-4">Nasi trenerzy</h3>
                        <p class="text-muted w-responsive mx-auto mb-5">Trenuj tylko z najlepszą ekipą w mieście, wielo
                            letnie doświadczenia. Ukończone wszystkie szkolenia.</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                                <p class="text-uppercase blue-text"><strong>Trener personalny</strong></p>
                                <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur,
                                    adipisci sed quia non numquam modi tempora eius.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
                                <p class="text-uppercase blue-text"><strong>Trener personalny</strong></p>
                                <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa
                                    accusantium
                                    doloremque rem laudantium totam aperiam.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
                                <p class="text-uppercase blue-text"><strong>Trener personalny</strong></p>
                                <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt
                                    mollit anim est fugiat nulla id eu laborum.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
                                <p class="text-uppercase blue-text"><strong>Trener personalny</strong></p>
                                <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi
                                    qui
                                    consectetur
                                    totam officia voluptates perferendis voluptatibus aut.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Dietetycy -->
            <div class="tab-pane fade" id="pills-dietetycy" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container my-5">
                    <div class="team-section text-center dark-grey-text">
                        <h3 class="font-weight-bold pb-2 mb-4">Nasi dietetycy</h3>
                        <p class="text-muted w-responsive mx-auto mb-5">Duży rośnij! Dużo jedz!.</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                                <p class="text-uppercase blue-text"><strong>Dietetyk</strong></p>
                                <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur,
                                    adipisci sed quia non numquam modi tempora eius.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
                                <p class="text-uppercase blue-text"><strong>Dietetyk</strong></p>
                                <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa
                                    accusantium
                                    doloremque rem laudantium totam aperiam.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
                                <p class="text-uppercase blue-text"><strong>Dietetyk</strong></p>
                                <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt
                                    mollit anim est fugiat nulla id eu laborum.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
                                <p class="text-uppercase blue-text"><strong>Dietetyk</strong></p>
                                <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi
                                    qui
                                    consectetur
                                    totam officia voluptates perferendis voluptatibus aut.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pracownicy -->
            <div class="tab-pane fade" id="pills-pracownicy" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container my-5">
                    <div class="team-section text-center dark-grey-text">
                        <h3 class="font-weight-bold pb-2 mb-4">Nasi pracownicy</h3>
                        <p class="text-muted w-responsive mx-auto mb-5">Najelpsza obsługa na tej półkuli
                            ziemnskiej!.</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                                <p class="text-uppercase blue-text"><strong>Pracownik</strong></p>
                                <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur,
                                    adipisci sed quia non numquam modi tempora eius.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
                                <p class="text-uppercase blue-text"><strong>Pracownik</strong></p>
                                <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa
                                    accusantium
                                    doloremque rem laudantium totam aperiam.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
                                <p class="text-uppercase blue-text"><strong>Pracownik</strong></p>
                                <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt
                                    mollit anim est fugiat nulla id eu laborum.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
                                         class="rounded-circle z-depth-1"
                                         alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
                                <p class="text-uppercase blue-text"><strong>Pracownik</strong></p>
                                <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi
                                    qui
                                    consectetur
                                    totam officia voluptates perferendis voluptatibus aut.</p>
                                <ul class="list-unstyled mb-0">
                                    <!-- Facebook -->
                                    <a class="p-2 fa-lg fb-ic">
                                        <img src="icons/facebook-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Twitter -->
                                    <a class="p-2 fa-lg tw-ic">
                                        <img src="icons/twitter-brands.svg" style="width: 30px">
                                    </a>
                                    <!-- Instagram -->
                                    <a class="p-2 fa-lg ins-ic">
                                        <img src="icons/instagram-brands.svg" style="width: 30px">
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
