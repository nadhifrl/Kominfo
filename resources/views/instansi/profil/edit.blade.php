<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kominfo</title>
    <link rel="icon" href="{{asset('coba/assets/img/kominfo.ico')}}" type="image/x-icon">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('coba/css/styles.css')}}" rel="stylesheet" />

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ADD8E6;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 8px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <div style="font-family: Brush Script MT"> <a class="navbar-brand js-scroll-trigger" href="/instansi"><img src="{{asset('coba/assets/img/logo_kominfo.png')}}" width="250px" height:"100px" style="margin-left:-70px"></a></div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#exampleModal" href="#">Pengajuan</a></li>
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('profil.index')}}">Profil</a></li>
                    <div class="dropdown">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" role="button" aria-haspopup="true" aria-expanded="false">Daftar Permohonan</a></li>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="{{route('terkirim.index')}}">Terkirim</a>
                            <hr>
                            <a class="dropdown-item" href="{{route('disetujui.index')}}">Disetujui</a>
                            <hr>
                            <a class="dropdown-item" href="{{route('ditolak.index')}}">Ditolak</a>
                        </div>
                    </div>
                    <li class="sidebar-nav-item">
                        <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#logoutModal">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <!-- <h1 class="mx-auto my-0 text-uppercase">kominfo</h1> -->
                <br>
                <!-- <a class="btn btn-primary js-scroll-trigger" href="{{ route('pengajuan.create') }}">Ajukan Pengajuan</a> -->
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Pengajuan Domain Dan Hosting</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('pengajuan.store')}}" enctype="multipart/form-data" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label>Nama Dinas/Instansi :</label>
                                <input type="text" class="form-control @error('nama_dinas') is-invalid @enderror" name="nama_dinas" placeholder="Nama Dinas.......">
                                @error('nama_dinas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat :</label>
                                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat....."></textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <hr>
                                <h5><b> Penanggung Jawab Administratif (Pejabat di Dinas/Instansi)</b></h5>
                                <hr>
                                <label>Nama :</label>
                                <input type="text" class="form-control @error('nama_penanggung') is-invalid @enderror" name="nama_penanggung" placeholder="Nama.......">
                                @error('nama_penanggung')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>NIP/NIK :</label>
                                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP/NIK.......">
                                @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>Pangkat/Golongan :</label>
                                <input type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat" placeholder="Pangkat/Golongan.......">
                                @error('pangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>No Telepon :</label>
                                <input type="text" class="form-control @error('notelepon') is-invalid @enderror" name="notelepon" placeholder="No Telepon.......">
                                @error('notelepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <hr>
                                <h5><b>Penanggung jawab teknis</b></h5>
                                <hr>
                                <label>Nama :</label>
                                <input type="text" class="form-control @error('nama_teknis') is-invalid @enderror" name="nama_teknis" placeholder="Nama.....">
                                @error('nama_teknis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>No Telepon:</label>
                                <input type="text" class="form-control @error('notelepon_teknis') is-invalid @enderror" name="notelepon_teknis" placeholder="No Telepon.....">
                                @error('notelepon_teknis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <hr>
                                <h5><b>Data Aplikasi Web</b></h5>
                                <hr>
                                <label>Nama Aplikasi :</label>
                                <input type="text" class="form-control @error('nama_aplikasi') is-invalid @enderror" name="nama_aplikasi" placeholder="Nama Aplikasi.....">
                                @error('nama_aplikasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>Usulan nama sub-domain :</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('sub_domain') is-invalid @enderror" name="sub_domain" placeholder="Usulan nama sub-domain.....">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">.jemberkab.go.id</span>
                                    </div>
                                    @error('sub_domain')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <label>Alamat IP **) :</label>
                                <textarea type="text" class="form-control @error('ip') is-invalid @enderror" name="ip" placeholder="Alamat IP....."></textarea>
                                @error('ip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <br>
                                <label>Fungsi aplikasi :</label>
                                <textarea type="text" class="form-control @error('fungsi_app') is-invalid @enderror" name="fungsi_app" placeholder="Fungsi Aplikasi....."></textarea>
                                @error('fungsi_app')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <hr>
                            <h5><b>Upload File PDF</b></h5>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="text" class="form-control" name=" alasan" value="Belum Ada Respon" Readonly hidden>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </header>
    <section class="projects-section bg-black" id="profil">
        <div class="container">
            <!-- Featured Project Row-->

            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters ">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="card bg-white">
                        <div class="card-header mb-0">
                            <h5 class="text-center font-weight-bold text-primary">Your Profile<span class="font-weight-bold text-primary"> Account</span></h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('profil.update',$user->id)}}" enctype="multipart/form-data" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Username</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{$user->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{$user->email}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Alamat</label>
                                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat">{!! $user->alamat !!}</textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class=" form-group font-weight-bold text-primary">
                                    <label>Nomor Telepon</label>
                                    <input  type= "number" class="form-control @error('nomortelepon') is-invalid @enderror" name="nomortelepon" placeholder="Nomor Telepon" value="{{$user->nomortelepon}}">
                                    @error('nomortelepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <a href="{{route('profil.index')}}" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->

    </section>
    <section class="contact-section" style="background-image: linear-gradient(to top left, #003366 0%, #660033 100%)">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Alamat</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">Jl. Dewi Sartika, Kampungtengah, Kepatihan, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="mailto:info@tamanbotanisukorambi.com">diskominfo.jemberkab.go.id</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telepon</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">(0331) 5102507</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar ?</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="dropdown-item; btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer  small text-center text-white-50" style="background-image: linear-gradient(to bottom left, #003366 0%, #660033 100%)">
        <div class="container">Copyright © Kelompok PKL UNEJ</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('coba/js/scripts.js')}}"></script>
    @if(Session::has('errors'))
    <script>
        $('#exampleModal').modal({
            show: true
        });
    </script>
    @endif
</body>

</html>