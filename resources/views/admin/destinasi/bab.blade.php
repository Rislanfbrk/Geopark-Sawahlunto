<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>{{ Auth::user()->name }} - Admin Geopark Sawahlunto</title>
    <link rel="shortcut icon" href="assets/img/header/logosawahlunto.png" />
</head>

<body>
    <div class="d-flex justify-content-end me-3 mt-3">
        <a href="{{ route('admin') }}" class="btn btn-primary" role="button">BACK</a>
    </div>
    <div class="container d-flex justify-content-center mb-5">
        <div class="card w-50">
            <div class="card-header">Tambah Destinasi Baru</div>
            <div class="card-body">
                <form action="{{ route('storeDestinasi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="title">Nama Destinasi</label>
                        <input type="text" name="dest_name" id="title" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">Destinasi Kategori</label>
                        <select name="dest_category" class="form-select" aria-label="Default select">
                            <option selected>Pilih Kategori</option>
                            <option value="Pusat Perbelanjaan"> Pusat Perbelanjaan</option>
                            <option value="Monumen"> Monumen</option>
                            <option value="Religi"> Religi</option>
                            <option value="Nature and Outdoor"> Nature and Outdoor</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">Lokasi Destinasi</label>
                        <input type="text" name="dest_location" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="dest_desc" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="dest_desc" id="dest_desc" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Cover</label>
                        <input class="form-control" name="cover" type="file" id="formFile" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Input Gambar</label>
                        <input class="form-control" name="images[]" type="file" id="formFile" multiple required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>