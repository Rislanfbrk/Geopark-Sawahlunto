<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata Surabaya</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/wisata.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar badge-primary sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img src="{{ asset('assets/img/header/logos.png') }}" alt="Logo" width="50px" height="50px">
                </div>
                <div class="sidebar-brand-text mx-3">Wisata Surabaya</div>
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

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('destinasi') }}">
                    <i class="fas fa-fw fa-map-marked-alt"></i>
                    <span>Destinasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('berita') }}">
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
                        <h1 class="h3 mb-0 text-gray-800">Destinasi</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Destinasi</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('searchDestinasi') }}" method="GET">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group-append">
                                            <input type="search" name="search" class="form-control" placeholder="Cari Nama Destinasi">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-8 d-flex justify-content-end mb-2">
                                        <a href="{{ route('tambahDestinasi') }}" class="btn btn-primary" role="button">
                                            <i class="fa fa-plus" aria-hidden="true"></i> </a></td>
                                    </div>
                                </div>
                            </form>
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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">No</th> --}}
                                            <th scope="col">Nama</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Cover</th>
                                            <th scope="col"> Image </th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($destinasi as $dest)
                                        <tr>
                                            {{-- <td>{{ $no++ }}</td> --}}
                                            <td>{{ $dest->dest_name }}</td>
                                            <td>{{ $dest->dest_category }}</td>
                                            <td>{{ $dest->dest_location }}</td>
                                            <td>{{ $dest->dest_desc }}</td>
                                            <td>
                                                <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="image" height="40px" width="40px" style="border-radius: 100%">
                                            </td>
                                            <td>
                                                @foreach ($dest->photodests as $photo)
                                                <img class="mb-2" src="{{ asset('destinasi/' . $photo->destphoto) }}" alt="image" height="40px" width="40px" style="border-radius: 100%">
                                                @endforeach
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('editDestinasi', [$dest->id]) }}" class="btn btn-outline-success" role="button"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="mt-2">
                                                    {{-- <form action=" {{ route('deleteDestinasi', [$dest->id]) }} ">
                                                    <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    @csrf
                                                    @method('delete')
                                                    </form> --}}

                                                    <a class="btn btn-outline-danger" href="#" role="button" data-toggle="modal" data-target="#deleteModal">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>

                                                {{-- Delete Modal --}}
                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">
                                                                    Delete</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Apakah anda yakin ingin Delete?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                <form action=" {{ route('deleteDestinasi', [$dest->id]) }} ">
                                                                    <button class="btn btn-primary" type="submit">Delete</button>
                                                                    @csrf
                                                                    @method('delete')
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $destinasi->links('paginatecustom') }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            {{-- End Page Content --}}

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