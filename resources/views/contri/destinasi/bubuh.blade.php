<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD With Multiple Image Upload</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="container" style="margin-top: 50px;">
        <div class="row">


            <div class="col-lg-3">
            </div>


            <div class="col-lg-6">
                <h3 class="text-center text-primary"><b>Update Destinasi</b> </h3>
                <div class="form-group">
                    <form action="{{ route('updateDestinasic', [$destinasi->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Nama Destinasi</label>
                            <input type="text" name="dest_name" value="{{ $destinasi->dest_name }}" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Destinasi Kategori</label>
                            <select name="dest_category" class="form-select" aria-label="Default select">
                                <option selected>Pilih Kategori</option>
                                <option> Monumen</option>
                                <option> Religi</option>
                                <option> Nature and Outdoor</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Lokasi Destinasi</label>
                            <input type="text" value="{{ $destinasi->dest_location }}" name="dest_location" id="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="dest_desc" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="dest_desc" id="dest_desc" rows="3">{{ $destinasi->dest_desc }}</textarea>
                        </div>
                        <div class="mb-3">
                            <p for=""> Cover : </p>
                            <img src="{{ asset('/cover/' . $destinasi->dest_cover) }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                        </div>
                        @if (count($destinasi->photodests) > 0)
                        <p>Images:</p>
                        @foreach ($destinasi->photodests as $img)
                        <img src="{{ asset('/destinasi/' . $img->destphoto) }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image_{{ $img->id }}">
                        @endforeach
                        @endif
                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>



</body>

</html>