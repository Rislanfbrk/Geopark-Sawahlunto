<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

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
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    GEOPARK SAWAHLUNTO <br />
                    <span style="color: hsl(218, 81%, 75%)">Register</span>
                    <img src="{{ asset('assets/img/LoginBg.png') }}" width="80%">
                </h1>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="{{ route('prosesRegister') }}" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-12">
                                    <label for="name" class="mb-2"> Nama </label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form3Example3">Email address</label>
                                {{-- <input type="email" id="form3Example3" class="form-control" /> --}}
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Alamat Email" required>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form3Example4">Password</label>
                                {{-- <input type="password" id="form3Example4" class="form-control" /> --}}
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                            </div>

                            <!-- Role -->
                            <div class="mb-3">
                                <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                                    <input type="radio" class="btn-check" name="role" value="administrator" id="vbtn-radio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="vbtn-radio1">Admin</label>
                                    <input type="radio" class="btn-check" name="role" value="contributor" id="vbtn-radio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="vbtn-radio2">Contributor</label>
                                </div>
                            </div>

                            <!-- Register -->
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary"> Register</button>
                            </div>
                        </form>
                        <p style="font-weight: 500"> Sudah Punya Akun? <a href="{{ route('login') }}"> LOGIN </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="text-center">
            <h1 class="mb-2">Register Form</h1>
            <hr>
        </div>
        <form action="{{ route('prosesRegister') }}" method="POST"> --}}
    @csrf CSRF BERGUNA UNTUK TOKEN LARAVEL
    {{-- <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                    <div class="col-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="mb-2"> Nama </label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <div>
                        <label for="role"> Role </label>
                    </div>
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="role" value="administrator"
                            id="vbtn-radio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="vbtn-radio1">Admin</label>
                        <input type="radio" class="btn-check" name="role" value="contributor" id="vbtn-radio2"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="vbtn-radio2">Contributor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary"> Register</button>
                    </div>
                </div>
            </div>
        </form>
        <p style="font-weight: 500"> Sudah Punya Akun? <a href="{{ route('login') }}"> LOGIN </a></p>
    </div> --}}
    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>