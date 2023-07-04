<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Geopark Sawahlunto</title>
    <link rel="shortcut icon" href="assets/img/header/logosawahlunto.png" />

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">
    <link href="{{ asset('assets/css/wisata.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav badge-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('berita') }}">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img src="{{ asset('assets/img/header/logosawahlunto.png') }}" alt="Logo" width="50px" height="50px">
                </div>
                <div class="sidebar-brand-text mx-3">Geopark Sawahlunto</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="fas fa-fw fa-house-user"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Page
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('destinasi') }}">
                    <i class="fas fa-fw fa-map-marked-alt"></i>
                    <span>Destinasi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('berita')}}">
                    <i class="fas fa-fw fa-bullhorn fa-3x"></i>
                    <span>Berita</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"> {{ Auth::user()->name }}
                                </span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/img/adminn.jpg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="font-weight-bold text-primary">Edit Berita</h6>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('berita') }}" role="button"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <form action="{{ route('updateBerita', [$berita->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="title">Nama Berita</label>
                                            <input type="text" name="berita_name" value="{{ $berita->berita_name }}" id="title" class="form-control">
                                        </div>
                                        {{-- <div class="form-group mb-3">
                                            <label for="title">Destinasi Kategori</label>
                                            <select name="dest_category" class="form-select"
                                                aria-label="Default select">
                                                <option selected>Pilih Kategori</option>
                                                <option> Monumen</option>
                                                <option> Religi</option>
                                                <option> Nature and Outdoor</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group mb-3">
                                            <label for="title">Lokasi Berita</label>
                                            <input type="text" value="{{ $berita->berita_location }}" name="berita_location" id="title" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="title">Lokasi Berita</label>
                                            <input type="text" value="{{ $berita->berita_location }}" name="berita_location" id="title" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="berita_desc" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" name="berita_desc" id="berita_desc" rows="3">{{ $berita->berita_desc }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <p for=""> Cover : </p>
                                            <img src="{{ asset('/cover/' . $berita->berita_cover) }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                                        </div>
                                        @if (count($berita->photoberita) > 0)
                                        <p>Images:</p>
                                        @foreach ($berita->photoberita as $img)
                                        <img src="{{ asset('/berita/' . $img->beritaphoto) }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image_{{ $img->id }}">
                                        @endforeach
                                        @endif
                                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah anda yakin ingin logout</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

            <!-- Page level plugins -->
            <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

            <!-- Page level custom scripts -->
            <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
            <script src="{{ asset('assets/js/script-table.js') }}"></script>

</body>

</html>