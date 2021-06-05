<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Tugas Kegiatan 3</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
        crossorigin="anonymous"></script>

    <style>
        [style*="--aspect-ratio"]> :first-child {
            width: 100%;
        }

        [style*="--aspect-ratio"]>img {
            height: auto;
        }

        @supports (--custom:property) {
            [style*="--aspect-ratio"] {
                position: relative;
            }

            [style*="--aspect-ratio"]::before {
                content: "";
                display: block;
                padding-bottom: calc(100% / (var(--aspect-ratio)));
            }

            [style*="--aspect-ratio"]> :first-child {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
            }
        }
    </style>
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="{{'/'}}">Tugas Kegiatan 3</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>

                        <a class="nav-link" href="{{'/'}}">
                            Home
                        </a>

                        <a class="nav-link" href="{{'buku'}}">
                            Data Buku
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">

                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <div class="source-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#jenisbuku">Tambah Jenis Buku</button>

                                        <!-- Modal Jenis Buku -->
                                        <div class="modal fade" id="jenisbuku" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Input Data
                                                            Jenis Buku
                                                        </h5>
                                                        <button type="button" class="close btn-danger"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('jenisbuku.store') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="jenis">Jenis</label>
                                                                <input type="text" class="form-control"
                                                                    name="jenis" id="jenis"
                                                                    placeholder="Masukkan jenis buku">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#buku">Tambah Buku</button>

                                        <!-- Modal Buku -->
                                        <div class="modal fade" id="buku" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Input Data
                                                            Buku
                                                        </h5>
                                                        <button type="button" class="close btn-danger"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('buku.store') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="jenisBuku">Nama Buku</label>
                                                                <input type="text" class="form-control" name="judul"
                                                                    id="Buku" placeholder="Masukkan nama buku">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tahunterbit">Tahun Terbit</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_terbit" id="tahunterbit"
                                                                    placeholder="Masukkan tahun terbit">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#rakbuku">Tambah Rak Buku</button>

                                        <!-- Modal Jenis Buku -->
                                        <div class="modal fade" id="rakbuku" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Input Data
                                                            Buku
                                                        </h5>
                                                        <button type="button" class="close btn-danger"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('rakbuku.store') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Nama Buku</label>
                                                                <select class="form-control" name="namaBuku" id="exampleFormControlSelect1">
                                                                    @foreach ($dataidBuku as $didBuku)
                                                                        <option value="{{ $didBuku->id }}">{{ $didBuku->judul }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Jenis Buku</label>
                                                                <select class="form-control" name="jenisBuku" id="exampleFormControlSelect1">
                                                                    @foreach ($dataidJenisBuku as $didJenisBuku)
                                                                        <option value="{{ $didJenisBuku->id }}">{{ $didJenisBuku->jenis }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 float-left">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cari buku">
                                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Jenis</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($dataBuku as $dBuku)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $dBuku->judul }}</td>
                                            <td>{{ $dBuku->jenis }}</td>
                                            <td>{{ $dBuku->tahun_terbit }}</td>
                                            <td>
                                                <a href="{{ url('jenisbuku/'. $dBuku->id_jenis_buku.'/edit') }}" class="btn btn-sm btn-warning">Edit Jenis Buku</a>
                                                <a href="{{ url('buku/'. $dBuku->id_buku.'/edit') }}" class="btn btn-sm btn-warning">Edit Buku</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Praktikum 3 - Pengembangan Teknologi Web</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>

</body>

</html>