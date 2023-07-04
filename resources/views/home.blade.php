<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geopark Sawahlunto</title>
    <link rel="shortcut icon" href="assets/img/header/logosawahlunto.png" />

    <!-- CDN Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/menuzord.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/star.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <style>
    /* Tambahan Header */
    .nav-link {
        color: #ffffff;
    }

    .caption_overlay {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 50%;
        color: white;
        z-index: 100;
    }

    .w-100 {
        width: 100%;
    }

    .animated-title {
        font-family: inherit;
        position: relative;
        height: 100px;
        width: 100%;
        text-align: center;
    }

    .caption_overlay_title {
        font-size: 70px;
        font-weight: bold;
    }

    .caption_overlay_subtitle {
        font-size: 35px;
        font-weight: bold;
    }

    .text-top {
        height: 45%;
    }

    .my-10 {
        margin-top: 6.25rem !important;
        margin-bottom: 6.25rem !important;
    }

    .container-shortcut {
        display: inline-block;
    }

    .group-shortcut {
        margin-right: 1.5em;
        margin-left: 1.5em;
    }

    .btn-shortcut {
        height: 100px;
        width: 100px;
        padding: 13px 7px;
        position: relative;
        color: white;
        text-decoration: none;
        border-radius: 120px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .testing {
        border: 2px solid green;
        background: red;
    }

    .padding-section {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .image {
        border-radius: 20px;
    }

    /* .fullwidthbanner-container {
            width: 100%;
            position: relative;
            padding: 0;
            overflow: hidden;
        } */
    </style>
</head>

<body>
    {{-- <header class="header">
        <nav class="nav-menuzord nav-menuzord-transparent">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord">
                    <a href="{{ route('home') }}" class="menuzord-text-brand">
    <img src="{{ asset('assets/img/header/logosawahlunto.png') }}" style="width: 120px;" alt="Geopark Sawahlunto">
    </a>
    <ul class="menuzord-menu menuzord-right">
        <li class="">
            <a class="font-weight-bold" href="{{ route('home') }}">
                Beranda
            </a>
        </li>
        <li class="">
            <a class="font-weight-bold" href="{{ route('publicDestinasi') }}">
                Destinasi
            </a>
        </li>
        <li class="">
            <a class="font-weight-bold" href="{{ route('publicEvent') }}">
                Event
            </a>
        </li>
        <li class="">
            <a class="font-weight-bold" href="{{ route('login') }}">
                Login
            </a>
        </li>
    </ul>
    
    </div>
    </div>
    </nav>
    </header> --}}

    <nav class="navbar navbar-expand-lg navbar-expand-md nav-menuzord nav-menuzord-transparent" data-bs-theme="white">
        <div class="container p-2">
            <a class="navbar-brand ms-3" href="{{ route('home') }}" class="menuzord-text-brand">
                <img src="{{ asset('assets/img/header/logosawahlunto.png') }}"
                    style="width: 100px; margin-top: 10px; margin-left: -40px;" alt="Geopark Sawahlunto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end
                    me-4 " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px;
                                font-weight: 500;" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px;
                                font-weight: 500;" href="{{ route('team') }}"> Team </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="caption_overlay text-center w-100" style="margin-top: 60px;">
            <div class="text-top">
                <h1 class="caption_overlay_title mt-0 text-success">
                    GEOPARK SAWAHLUNTO
                </h1>
            </div>
            <div class="text-bottom">
                <div class="content">
                    <h2 class="mb-0 caption_overlay_subtitle">
                        You will love every corner of it
                    </h2>
                    <div class="mt-3">
                        <h5>
                            Let's explore the city in Indonesia with famous name called the City of Charcoal.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="my-10">
            </div>
            <div class="mt-9 container-shortcut">
                <div class="d-flex">
                    <div class="text-center group-shortcut">
                        <a href="{{ route('publicDestinasi') }}" class="btn-shortcut btn-beat-radial">
                            <div class="d-block w-100">
                                <i class="fa fa-fw fa-map-marked-alt fa-3x"></i>
                            </div>
                            <div class="d-block w-100">
                                <span>
                                    Destinasi
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="text-center group-shortcut">
                        <a href="{{route('publicBerita')}}" class="btn-shortcut btn-beat-radial">
                            <div class="d-block w-100">
                                <i class="fa fa-fw fa-bullhorn fa-3x"></i>
                            </div>
                            <div class="d-block w-100">
                                <span>
                                    Berita
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <div class="bg-overlay-dark fullwidthbanner-container">
        <video class="w-100 video-front" autoplay muted loop id="myVideo" style="height: 100vh; object-fit: cover;">
            <source src="assets/video/sawahlunto.mp4" type="video/mp4">
        </video>
    </div>


    <!-- Isi Content -->
    <section class="padding-section">
        <div class="tittle text-center">
            <img src="assets/img/icon-index/icon-sign.png" alt="journey" height="100px" width="100px">
            <h1 class="font-weight-bold mt-2" style="font-size: 60px; color: #198754 !important;">
                Start Your Best <br />
                Journey In Sawahlunto
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-4">

                    <div>
                        <div class="mb-2">
                            <img class="image" src="assets/img/monumen/keretaapi.jpg" alt="Museum Kereta Api Sawahlunto"
                                height="400px" width="550px">
                        </div>
                        <span class="badge badge-primary mb-2"> Museum </span>
                        <h4 class="mb-1 font-weight-bold">Museum Kereta Api Sawahlunto</h4>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. A. Yani, Pasar, Kec. Lembah Segar, Kota Sawahlunto, Sumatera Barat 27422
                        </h6>
                        <br>
                    </div>

                    <div>
                        <div class="mb-2">
                            <img class="image" src="assets/img/monumen/lubangtambang.jpg"
                                alt="Museum Situs Lubang Tambang Soero & Infobox" height="363px" width="550px">
                        </div>
                        <span class="badge badge-primary mb-2">Museum</span>
                        <h4 class="mb-1 font-weight-bold">Museum Situs Lubang Tambang Soero & Infobox</h4>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Abdurrahman Hakim, Tanah Lapang, Kec. Lembah Segar, Kota Sawahlunto, Sumatera Barat
                            27422
                        </h6>
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <div class="mb-2">
                        <img class="image" src="assets/img/nature/puncakcemara3.jpg" alt="Puncak Cemara" height="900px"
                            width="550px">
                    </div>
                    <span class="badge badge-primary mb-2">Nature and Outdoor</span>
                    <h4 class="mb-1 font-weight-bold">Puncak Cemara</h4>
                    <h6>
                        <i class="fa fa-fw fa-map-marker-alt"></i>
                        Saringan, Kec. Barangin, Kota Sawahlunto, Sumatera Barat 27422
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
        style="transform:rotate(180deg);margin-bottom:-1px">
        <path class="elementor-shape-fill" fill="#198754" opacity="0.33"
            d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7
                 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#198754" opacity="0.66"
            d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1
                 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#198754" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0
                 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
        </path>
    </svg>
    <footer class="footer">
        <div class="pb-3" style="background: #198754 !important;">
            <div class="container">

                <!-- Find Us -->
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-5 mt-5">
                        <div class="title-tag mb-5">
                            <h6>FIND US</h6>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Tourism Information Center <br>
                                Jl. Dt. Nan Sambilan, Barangin, Sijantang Koto, Talawi
                            </a>
                        </div>
                        <div class="hubungi-kami">
                            <button>
                                <a href="#" class="btn btn-white
                                         font-weight-bold
                                         telpon-icon">
                                    <i class="fa fa-fw fa-phone
                                             telpon-icon"></i>
                                    Kontak Kami
                                </a>
                            </button>
                        </div>
                        <div class="icon mt-3">
                            <a href="https://www.facebook.com/" class="fb">
                                <button type="button" class="btn btn-light" style="border-radius: 30px;">
                                    <div>
                                        <i class="fa-brands fa-facebook
                                             facebook-icon"></i>
                                    </div>
                                </button>
                            </a>
                            <a href="https://www.instagram.com/geoparksawahlunto/" class="ig">
                                <button type="button" class="btn btn-light
                                     ms-3" style="border-radius: 30px;">
                                    <div>
                                        <i class="fa-brands fa-instagram "></i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Us -->
                    <div class="col-lg-4 col-md-12 mb-5 mt-lg-5 mt-md-0">
                        <div class="title-tag mb-5">
                            <h6>CONTACT US</h6>
                        </div>
                        <div class="footer-link mb-2">
                            <p>
                                Dinas Pariwisata Pemuda dan Olahraga Kota Sawahlunto
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-2 footer-link">
                                <span class="fa fa-lg fa-fw
                                         fa-map-marker-alt"></span>
                            </div>
                            <div class="col-10">
                                <p>
                                    Pasar Sapan, Kel. Durian II, Saringan, Kec. Barangin, Kota Sawahlunto, Sumatera
                                    Barat 27422
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 footer-link">
                                <span class="fa fa-lg fa-fw fa-phone"></span>
                            </div>
                            <div class="col-10">
                                <p>
                                    (0754) 61032
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 footer-link">
                                <span class="fa fa-lg fa-fw
                                         fa-envelope"></span>
                            </div>
                            <div class="col-10">
                                <p>
                                    informasi@sawahlunto.go.id
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Our Other Sites -->
                    <div class="col-lg-3 col-md-12 mb-5 mt-lg-5 mt-md-0">
                        <div class="title-tag mb-5">
                            <h6>OUR OTHER SITES</h6>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Disporapar Sawahlunto
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                360° Sawahlunto
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Tiket Wisata Sawahlunto
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Katalog Museum Sawahlunto
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Bangga Sawahlunto
                            </a>
                        </div>
                    </div>

                    <!-- Wisata Surabaya -->
                    <div class="col-lg-1 col-md-12 mb-5 mt-lg-5 mt-md-0">
                        <div class="title-tag mb-5">
                            <h6>WISATA SAWAHLUNTO</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>