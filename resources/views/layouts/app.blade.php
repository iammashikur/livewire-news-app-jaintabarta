<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->

    <meta name="turbolinks-cache-control" content="no-cache">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/materia/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

    @livewireStyles
        <script src="{{url('js/app.js')}}" defer></script>

        @stack('scripts')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        @livewireScripts

</head>

<body>

    <div class="header mt-5">

        <div class="container mb-4">

            <center>
                <img alt="" class="i-amphtml-fill-content i-amphtml-replaced-content mb-4" decoding="async" src="https://tpc.googlesyndication.com/daca_images/simgad/7551669918282097707">
            </center>

            <div class="row">
                <div class="col-md-4 col-12 d-flex d-md-inline justify-content-start justify-content-center ">

                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="/logo.png" class="main-logo" alt="">
                    </a>

                </div>

                <div class="col-md-4 col-12">

                    <p class="text-center header-date"><i class="fas fa-calendar-alt    "></i> ২৯ মার্চ ২০২১ <i
                            class="fas fa-clock    "></i> ১১:২৮ অপরাহ্ন</p>

                </div>

                <div class="col-md-4 col-12 float-right">


                    <div class="social-buttons d-flex justify-content-md-end justify-content-center">
                        <a href="#" class="social-buttons__button social-button social-button--facebook"
                            aria-label="Facebook">
                            <span class="social-button__inner">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                        </a>
                        <a href="#" class="social-buttons__button social-button social-button--youtube"
                            aria-label="Foutube">
                            <span class="social-button__inner">
                                <i class="fab fa-youtube"></i>
                            </span>



                        </a>

                        <a href="#" class="social-buttons__button social-button social-button--twitter"
                            aria-label="Twitter">
                            <span class="social-button__inner">
                                <i class="fab fa-twitter"></i>
                            </span>
                        </a>



                        <a href="#" class="social-buttons__button social-button social-button--instagram"
                            aria-label="Instagram">
                            <span class="social-button__inner">
                                <i class="fab fa-instagram"></i>
                            </span>
                        </a>


                        <a href="#" class="social-buttons__button social-button social-button--linkedin"
                            aria-label="Linkedin">
                            <span class="social-button__inner">
                                <i class="fab fa-linkedin"></i>
                            </span>
                        </a>

                    </div>



                </div>
            </div>

        </div>


        <div class="container">


            <nav class="navbar navbar-expand-xl navbar-light bg-light">

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#"> বিশেষ সংবাদ</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i style="font-size: 13px" class="fas fa-arrow-circle-down"
                                    aria-hidden="true"></i> সিলেট</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">করোনাভাইরাস</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">রাজনীতি</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">রাজনীতি</a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link" href="#">রাজনীতি</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">বিশ্ব</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i style="font-size: 13px" class="fas fa-arrow-circle-down"
                                    aria-hidden="true"></i> বাংলাদেশ</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-static">

                            <a class="nav-link" data-toggle="dropdown" href="#" id="navbarDropdown" role="button"><i
                                    style="font-size: 13px" class="fas fa-arrow-circle-down" aria-hidden="true"></i>
                                সব</a>






                            <ul class="dropdown-menu megamenu">
                                <div class="row">
                                    <li class="col-sm-2">
                                        <ul>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>

                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>

                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>

                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-2">
                                        <ul>

                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-2">
                                        <ul>

                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Lorem Ipsum</a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>




                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success search my-2 my-sm-0" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>

            </nav>

        </div>

    </div>


    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->







</body>

</html>
