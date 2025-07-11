<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Rekrutmen</title>

  <link rel="stylesheet" href="/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/theme/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
  <!-- @toastr_css -->
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white bg-gradient-success">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="/theme/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><strong>Rekrutmen Tenaga RSUD Sultan Suriansyah</strong></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">

          </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
          {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                class="fas fa-th-large"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: silver">

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <form action="/daftar" method="post" id="myForm">
            @csrf
            <div class="row">

              <div class="col-lg-12">
                <h4 class="text-center">Jadwal Pendaftaran dimulai tanggal : <br />
                  {{\Carbon\Carbon::parse(\App\Models\WaktuPendaftaran::first()->mulai)->translatedFormat('d F Y')}}
                  s/d
                  {{\Carbon\Carbon::parse(\App\Models\WaktuPendaftaran::first()->sampai)->translatedFormat('d F Y')}}
                </h4>
                <div class="card card-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header text-white"
                    style="background: url('/theme/bghijau.jpg'); background-size:cover">
                    <h3 class="widget-user-username text-center"><strong>Rekrutmen</strong></h3>
                    <h5 class="widget-user-desc text-center">DAFTAR</h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" style="background-color:#1a8b41" src="/theme/logo.png" alt="User Avatar">
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="card-body">

                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Formasi Yang Dilamar</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="kategori_id">
                              <option value="">-</option>
                              @foreach ($formasi as $item)
                              <option value="{{$item->id}}">{{$item->nama}} - {{$item->penempatan}}
                                ({{$item->jkel == null ? 'P/L' : $item->jkel}})</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">NIK</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nik" value="{{old('nik')}}" placeholder="NIK"
                              minlength="16" maxlength="16" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail4" name="nama"
                              placeholder="nama lengkap" value="{{old('nama')}}" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-3 col-form-label">Telp / WA</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="telp" name="telp" maxlength="15"
                              placeholder="telp" value="{{old('telp')}}" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" placeholder="email"
                              value="{{old('email')}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" minlength="8" placeholder="password"
                              required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail4" class="col-sm-3 col-form-label">Masukkan Password Lagi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" minlength="8" name="confimation_password"
                              placeholder="konfirmasi password" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Catatan :</label>
                          <div class="col-sm-9">
                            NIK menjadi username untuk Login
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile_site_key') }}"></div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Daftar</button> <br />
                            <a href="/">Ke Halaman Login</a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer text-center">
      {{-- <div class="float-right d-none d-sm-inline">
        CAT
      </div> --}}

      <strong>Developed By Diskominfotik</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/theme/plugins/jquery/jquery.min.js"></script>
  <script src="/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/theme/dist/js/adminlte.min.js"></script>
  <script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
    const token = document.querySelector('input[name="cf-turnstile-response"]')?.value;

    if (!token) {
        e.preventDefault();
        alert('Harap centang captcha terlebih dahulu.');
    }
});
  </script>
  <!-- @toastr_js
  @toastr_render -->
  <script>
    $(document).ready(function() {
        $("input#nik").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
        });
        $("input#telp").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
        });
     });
  </script>
</body>

</html>
