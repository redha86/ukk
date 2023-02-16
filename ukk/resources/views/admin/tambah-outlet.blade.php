<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaundryAja</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/logo-tby.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo1.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('admin') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('paketcucian') }}" class='sidebar-link'>
                                <i class="bi bi-book-fill"></i>
                                <span>Paket Cucian</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('adminkasir') }}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Kasir</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="{{ url('adminoutlet') }}" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Outlet</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ url('adminmember') }}" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Member</span>
                            </a>
                        </li>

                        

                        <li class="sidebar-item  ">
                            <a href="{{ url('adminowner') }}" class='sidebar-link'>
                                <i class="bi bi-bookmark-fill"></i>
                                <span>Owner</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('admintransaksi') }}" class='sidebar-link'>
                                <i class="bi bi-calendar-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{ url('generatelaporan') }}" class='sidebar-link'>
                                <i class="bi bi-clipboard-data"></i>
                                <span>Generate Laporan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Tambah Outlet</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-12 col-md-6">
                                <div class="card">
                                    <div class="card-body py-4 px-5">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold">John Duck</h5>
                                                <a href=""><h6 class="text-muted mb-0">Sign Out</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <section id="basic-vertical-layouts">
                                <div class="row match-height">
                                    <div class="col-md-6 col-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Form Tambah Outlet</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form class="form form-vertical" action="{{ route('prosesoutlet') }}" method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-vertical">Nama Outlet</label>
                                                                        <input type="text" id="first-name-vertical"
                                                                            class="form-control" name="nama_outlet"
                                                                            placeholder="Nama Outlet">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-vertical">Alamat</label>
                                                                        <input type="text" id="email-id-vertical"
                                                                            class="form-control" name="alamat"
                                                                            placeholder="Alamat">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-vertical">Nomor Telepon</label>
                                                                        <input type="text" id="email-id-vertical"
                                                                            class="form-control" name="tlp"
                                                                            placeholder="Nomor Telepon">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex justify-content-end">
                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                        Tambah
                                                                      </button>
                                                                    <button type="reset"
                                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                </div>
                                                                <!-- Modal -->
                                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Lanjutkan?</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            Apakah Data yang anda isi sudah benar
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; LaundryAja</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">Dhaa</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>