@extends('layouts.app')

@section('title','O nas')

@section('content')


    <!-- Opis -->
    <div class="container my-5 pt-lg-5 mt-5">
        <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Galeria</h3>
        <hr class="w-header">
        <!-- Section description -->
        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Zobacz kilka zdjęć z naszych obiektów.</p>
    </div>

    <!-- Gallery -->
    <div class="ml-3 mr-3">
        <div class="row mb-3">

            <div class="col-lg-4 col-md-6 mb-4 mt-5">

                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0 " style="border-radius: 10px">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/aa.jpg"
                                         allowfullscreen>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Never give up!</span>
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>

                            </div>

                        </div>

                    </div>
                </div>

                <a><img class="img-fluid z-depth-1 " style="border-radius: 10px" src="photo/a.jpg" alt="photo"
                        data-toggle="modal" data-target="#modal1"></a>

            </div>

            <div class="col-lg-4 col-md-6 mb-4  mt-5">

                <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/b.jpg"
                                         allowfullscreen>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Never give up!</span>
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>

                            </div>

                        </div>


                    </div>
                </div>

                <a><img class="img-fluid z-depth-1" style="border-radius: 10px" src="photo/b.jpg" alt="video"
                        data-toggle="modal" data-target="#modal6"></a>

            </div>

            <div class="col-lg-4 col-md-6 mb-4  mt-5">

                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/c.jpg"
                                         allowfullscreen>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Never give up!</span>
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <a><img class="img-fluid z-depth-1" style="border-radius: 10px" src="photo/c.jpg" alt="video"
                        data-toggle="modal" data-target="#modal4"></a>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/d.jpg"
                                         allowfullscreen>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Never give up!</span>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

                <a><img class="img-fluid z-depth-1" style="border-radius: 10px" src="photo/d.jpg" alt="video"
                        data-toggle="modal" data-target="#modal2"></a>

            </div>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/e.jpg"
                                         allowfullscreen>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Never give up!</span>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <a><img class="img-fluid z-depth-1" style="border-radius: 10px" src="photo/e.jpg" alt="video"
                        data-toggle="modal" data-target="#modal5"></a>

            </div>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half ">
                                    <img class="embed-responsive-item d-inline-block img-fluid" src="photo/f.jpg"
                                         allowfullscreen>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer d-block d-md-flex justify-content-center">
                                <span class="mr-4">Never give up!</span>
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Zamknij
                                </button>

                            </div>

                        </div>

                    </div>
                </div>

                <a><img class="img-fluid z-depth-1" style="border-radius: 10px" src="photo/f.jpg" alt="video"
                        data-toggle="modal" data-target="#modal3"></a>

            </div>

        </div>
    </div>


@endsection
