<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/cards.css') }}">
</head>

<body>
    <!-- Navigasi -->
    <section class="navigasi">
        <nav class="navbar navbar-expand-lg box-navbar" data-bs-theme="white">
            <div class="container p-2">
                <a class="navbar-brand ms-3" href="#">
                    <img src="{{ asset('assets/img/header/surabaya.png') }}" alt="Bootstrap" width="105px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end
                        me-4" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('publicDestinasi') }}">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('publicBerita') }}"> Berita </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('team') }}"> Team </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="title text-center mt-5">OUR TEAM</h5>

            <div class="row mb-5" style="justify-content: center">

                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile d-flex justify-content-center"> <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2022/10/04/633bcce2a5c38-anime-naruto-rayakan-ulang-tahun-ke-20_1265_711.jpg">
                            </div>
                            <div class="card-title mb-4">
                                <div style="font-weight: 700; font-size: 17px" class="d-flex justify-content-center mt-2">
                                    Mochammad Fariz Zulfiannur
                                </div>
                                <div class="d-flex justify-content-center">
                                    <small> Leader of Team & Back End Developer </small>
                                </div>
                            </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> I expected anything less than perfect for the team of
                                        experts. They are the best team ever! </small> </p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-linkedin fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-github fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Faradina --}}
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile d-flex justify-content-center"> <img src="{{ asset('assets/img/team/faradina1.jpg') }}"></div>
                            <div class="card-title mb-4">
                                <div style="font-weight: 700; font-size: 17px" class="d-flex justify-content-center mt-2">
                                    Faradina
                                </div>
                                <div class="d-flex justify-content-center">
                                    <small> Front End Developer </small>
                                </div>
                            </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> I expected anything less than perfect for the team of
                                        experts. They are the best team ever! </small> </p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-linkedin fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-github fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagus Anggriawan --}}
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile d-flex justify-content-center"> <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2022/10/04/633bcce2a5c38-anime-naruto-rayakan-ulang-tahun-ke-20_1265_711.jpg">
                            </div>
                            <div class="card-title mb-4">
                                <div style="font-weight: 700; font-size: 17px" class="d-flex justify-content-center mt-2">
                                    Bagus Anggriawan
                                </div>
                                <div class="d-flex justify-content-center">
                                    <small> Back End Developer </small>
                                </div>
                            </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> I expected anything less than perfect for the team of
                                        experts. They are the best team ever! </small> </p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-linkedin fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-github fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Rossa Lina --}}
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile d-flex justify-content-center"> <img src="{{ asset('https://thumb.viva.co.id/media/frontend/thumbs3/2022/10/04/633bcce2a5c38-anime-naruto-rayakan-ulang-tahun-ke-20_1265_711.jpg') }}">
                            </div>
                            <div class="card-title mb-4">
                                <div style="font-weight: 700; font-size: 17px" class="d-flex justify-content-center mt-2">
                                    Rossa Lina
                                </div>
                                <div class="d-flex justify-content-center">
                                    <small> Front End Developer </small>
                                </div>
                            </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> I expected anything less than perfect for the team of
                                        experts. They are the best team ever! </small> </p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-linkedin fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-github fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Ridha Dinda --}}
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile d-flex justify-content-center"> <img src="{{ asset('assets/img/team/ridhadinda2.jpg') }}"></div>
                            <div class="card-title mb-4">
                                <div style="font-weight: 700; font-size: 17px" class="d-flex justify-content-center mt-2">
                                    Ridha Dinda
                                </div>
                                <div class="d-flex justify-content-center">
                                    <small> Front End Developer </small>
                                </div>
                            </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> I expected anything less than perfect for the team of
                                        experts. They are the best team ever! </small> </p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-linkedin fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-github fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="#">
                                            <i class="fa fa-instagram fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Team -->

    {{-- Footer --}}
    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7
                             c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1
                             s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0
                             h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
        </path>
    </svg>
    <footer class="footer">
        <div class="pb-3" style="background: #4a4a8a;">
            <div class="container">

                <!-- Find Us -->
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-5 mt-5">
                        <div class="title-tag mb-5">
                            <h6>FIND US</h6>
                        </div>
                        <div class="footer-link">
                            <a href="#">
                                Tourism Information Center <br>
                                Jl. Gubernur Suryo 15
                            </a>
                        </div>
                        <div class="icon p-0 mt-2">
                            <a href="#" style="background: white; color:#4a4a8a" class="btn btn-white p-2 ms-0 m-3 font-weight-bold telpon-icon">
                                <i class="fa fa-fw fa-phone telpon-icon"></i>
                                Kontak Kami
                            </a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="icon p-0 m-0">
                                    <a href="#" style="background: white; color: #4a4a8a; border-radius: 100%;" class="p-2">
                                        <i class="fa fa-facebook facebook-icon"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="icon p-0 m-0">
                                    <a href="#" style="background: white; color: #4a4a8a; border-radius: 100%;" class="p-2">
                                        <i class="fa fa-instagram instagram-icon"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        {{-- <div class="icon">
                            <button type="button" class="btn btn-light"
                                style="border-radius: 30px; background: white">
                                <div>
                                    <i class="fa fa-facebook facebook-icon"></i>
                                </div>
                            </button>
                            <button type="button" class="btn btn-light ms-3"
                                style="border-radius: 30px; background: white">
                                <div>
                                    <i class="fa fa-instagram instagram-icon"></i>
                                </div>
                            </button>
                        </div> --}}
                    </div>

                    <!-- Contact Us -->
                    <div class="col-lg-4 col-md-12 mb-5 mt-lg-5 mt-md-0">
                        <div class="title-tag mb-5">
                            <h6>CONTACT US</h6>
                        </div>
                        <div class="footer-link mb-2">
                            <p>
                                Dinas Kebudayaan, Kepemudaan dan
                                Olahraga serta
                                Pariwisata Kota Surabaya Kota Surabaya
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-2 footer-link">
                                <span class="fa fa-lg fa-fw
                                                     fa-map-marker"></span>
                            </div>
                            <div class="col-10">
                                <p>
                                    Jl. Tunjungan No.1-3 Kelurahan
                                    Genteng <br />
                                    Kecamatan Genteng, Kota Surabaya<br />
                                    Jawa Timur, Indonesia, 60275
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 footer-link">
                                <span class="fa fa-lg fa-fw fa-phone"></span>
                            </div>
                            <div class="col-10">
                                <p>
                                    031-5318409
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
                                    disbudporapar@surabaya.go.id
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
                                Disbudporapar Surabaya
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                360° Surabaya
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Tiket Wisata Surabaya
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Katalog Museum Surabaya
                            </a>
                        </div>
                        <div class="footer-link mb-2">
                            <a href="#">
                                Bangga Surabaya
                            </a>
                        </div>
                    </div>

                    <!-- Wisata Surabaya -->
                    <div class="col-lg-1 col-md-12 mb-5 mt-lg-5 mt-md-0">
                        <div class="title-tag mb-5">
                            <h6>WISATA SURABAYA</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>