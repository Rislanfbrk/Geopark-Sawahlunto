<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <!-- Section: Design Block -->
    {{-- <section class="background-radial-gradient overflow-hidden"> --}}
    <style>
        body {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(2000px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                /* radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%); */
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .my-5 {
            margin-top: 1rem !important;
            margin-bottom: 10rem !important;
        }
    </style>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <a href="{{ route('home') }}" style="text-decoration:none">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        WISATA SURABAYA <br />
                        <span style="color: hsl(218, 81%, 75%)">Login</span>
                        <img src="{{ asset('assets/img/LoginBg.png') }}" width="80%">
                    </h1>
                </a>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="{{ route('prosesLogin') }}" method="POST">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->

                            @if (session('gagal'))
                            <div class="alert alert-danger">
                                <b> Oops! </b> {{ session('gagal') }}
                            </div>
                            @endif

                            @if (session('berhasil'))
                            <div class="alert alert-success">
                                <b> Hooray! </b> {{ session('berhasil') }}
                            </div>
                            @endif

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" placeholder="Masukkan Email" name="email" required />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" placeholder="Masukkan Password" name="password" required />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Login
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                {{-- <p>or sign up with:</p>   --}}
                                <p style="font-weight: 500"> Belum Punya Akun <a href="{{ route('register') }}"> Daftar
                                        Disini </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
    {{-- <div class="container">
            <div class="text-center">
              <h1 class="mb-2">Login Form</h1>
              <hr>
            </div>
            @if (session('gagal'))
                <div class="alert alert-danger">
                    <b> Oops! </b> {{ session('gagal') }}
    </div>
    @endif
    @if (session('berhasil'))
    <div class="alert alert-success">
        <b> Hooray! </b> {{ session('berhasil') }}
    </div>
    @endif
    <form action="{{ route('prosesLogin') }}" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                </div>
                <div class="col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
            </div>

            <div class="row">
                <div class="col-8 mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </form>
    <p style="font-weight: 500"> Belum Punya Akun <a href="{{ route('register') }}"> Daftar Disini </a></p>
    </div> --}}
    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>