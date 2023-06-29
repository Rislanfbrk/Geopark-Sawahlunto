<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Surabaya</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <section class="navigasi mb-5">
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
                                    font-weight: 500;" href="{{ route('admin') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('destinasi') }}">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500;" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="container">
        <div class="container d-flex justify-content-center mb-5">
            <div class="card w-50">
                <div class="card-header">Dashboard Admin</div>
                <div class="card-body">
                    <div>
                        <h4 style="color: black">Selamat Datang,</h4>
                        <h1>{{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>