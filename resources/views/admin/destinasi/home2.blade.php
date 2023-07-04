<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Geopark Sawahlunto</title>
    <link rel="shortcut icon" href="assets/img/header/logosawahlunto.png" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <section class="navigasi mb-4">
        <nav class="navbar navbar-expand-lg box-navbar" data-bs-theme="white">
            <div class="container p-2">
                <a class="navbar-brand ms-3" href="#">
                    <img src="{{ asset('assets/img/header/logosawahlunto.png') }}" alt="Bootstrap" width="65px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end
                        me-4" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500; color: #198754 !important;" href="{{ route('admin') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500; color: #198754 !important;" href="{{ route('destinasi') }}">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 20px;
                                    font-weight: 500; color: #198754 !important;" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="text-center mb-4">
            <h2 style="color:black"> Destinasi </h2>
        </div>
        <div class="container">
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('tambahDestinasi') }}" class="btn btn-primary" role="button"><i class="fa-solid fa-plus"></i> TAMBAH</a></td>
            </div>
            @if (session('gagal'))
            <div class="alert alert-danger">
                <b> Oops! </b> {{ session('error') }}
            </div>
            @endif

            @if (session('berhasil'))
            <div class="alert alert-success">
                <b> Hooray! </b> {{ session('berhasil') }}
            </div>
            @endif
            <table class="table table-hover table-bordered table-responsive table-responsive-lg allign-middle mt-1" width="1000px">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Category</th>
                        <th scope="col">Location</th>
                        {{-- <th scope="col">Description</th> --}}
                        <th scope="col">Cover</th>
                        <th scope="col"> Image </th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($destinasi as $dest)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dest->dest_name }}</td>
                        <td>{{ $dest->dest_category }}</td>
                        <td>{{ $dest->dest_location }}</td>
                        {{-- <td>{{ $dest->dest_desc }}</td> --}}
                        <td>
                            <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="image" height="40px" width="40px">
                        </td>
                        <td>
                            @foreach ($dest->photodests as $photo)
                            <img src="{{ asset('destinasi/' . $photo->destphoto) }}" alt="image" height="40px" width="40px">
                            @endforeach
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <a href="{{ route('editDestinasi', [$dest->id]) }}" class="btn btn-outline-success" role="button"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="col-3">
                                    <form action=" {{ route('deleteDestinasi', [$dest->id]) }} ">
                                        <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        @csrf
                                        @method('delete')
                                    </form>

                                    {{-- <div class="col-5">
                                            <a href="{{ route('deleteDestinasi', [$dest->id]) }}" class="btn btn-danger"
                                    role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div> --}}
                            </div>
                            <div class="col-2">
                            </div>
        </div>
        </td>
        </tr>
        @endforeach

        </tbody>
        </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>