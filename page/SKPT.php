<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/pavi.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pertanahan
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/2a985d6dcf.js" crossorigin="anonymous"></script>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
  .button {     
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;        
}
</style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Welcome
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./dashboard.php">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#masterdata">
            <i class="fas fa-folder"></i>
              <p>Master Data <b class="caret"></b></p>
            </a>
            <div class="collapse " id="masterdata">
              <ul class="nav">
                <li>
                  <a href="desa.php">
                    <span class="sidebar-mini-icon"><i class="fas fa-angle-right"></i></span>
                    <span class="sidebar-normal"> Desa </span>
                  </a>
                </li>
              </ul>
          </li>
          <li class="active ">
            <a href="SKPT.php">
            <i class="fas fa-file-alt"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li>
            <a href="Profile.php">
            <i class="fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="../sistem/logout.php">
            <i class="fas fa-sign-out-alt"></i>
              <p>LogOut</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">SKPT </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <section class="content">
      <div class="col-sm-6">
                    <h2>Surat Keterangan Penguasaan Tanah</h2>
                </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <a href="http://151.106.125.164/skpt/create" class="btn btn-primary">
                    <i class="fas fa-user-plus    "></i>
                    Tambah Data
                  </a>
                  <div class="">
                    <!-- <a href="" class="btn btn-default btn-flat " data-toggle="modal" data-target="#importModal" title="Import File">
                            <i class="fas fa-file-import    "></i>
                        </a> -->
                    <a href="http://151.106.125.164/skpt/pdf" target="blank" class="btn btn-danger" title="Laporan">
                      <i class="fas fa-file-pdf    "></i>
                    </a>
                    <a href="http://151.106.125.164/skpt/arsip" target="blank" class="btn btn-danger" title="Arsip SKPT">
                      <i class="fas fa-file-pdf    "></i>
                    </a>
                    <!-- <a href="http://151.106.125.164/skpt/export" class="btn btn-default btn-flat" title="Export Excel">
                            <i class="fas fa-file-excel    "></i>
                        </a> -->
                  </div>
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-head-fixed text-nowrap table-bordered">
                    <thead>
                      <tr class="text-left">
                        <th colspan="5">Data Pemohon</th>
                        <th colspan="5">Data Objek Tanah</th>
                        <th></th>
                      </tr>
                      <tr class="text-left">
                        <th>#</th>
                        <th>No</th>
                        <th>Dokumen</th>
                        <th>Nomor Reff</th>
                        <th>Nama Pemohon</th>
                        <th>Alamat Pemohon</th>
                        <th>Ukuran</th>
                        <th>luas Tanah M<sup>2</sup></th>
                        <th>Penggunaan Tanah</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Tahun Penguasaan Tanah</th>
                        <th>Geometry</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 20px">
                          <div class="btn-group">
                            <button type="button" class="button" data-toggle="dropdown">
                              <i class="fas fa-ellipsis-v    "></i>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="http://151.106.125.164/skpt/print/140" target="_blank">
                                  <i class="fas fa-file-download    "></i>
                                  Print SKPT
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="http://151.106.125.164/skpt/140">
                                  <i class="fas fa-eye    "></i>
                                  Lihat SKPT
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="http://151.106.125.164/skpt/140/edit">
                                  <i class="fas fa-edit    "></i>
                                  Edit
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#" onclick="handleDelete (140)">
                                  <i class="fas fa-trash    "></i>
                                  Delete
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                        <td>1</td>
                        <!-- <td style="width: 50px">1</td> -->
                        <td class="text-center">
                          <a href="http://151.106.125.164/img/gambar/krisgianto-61b051d523f90.pdf" data-fancybox="" data-caption="Krisgianto">
                            <img width="64px" height="64px" src="http://151.106.125.164/img/gambar/krisgianto-61b051d523f90.pdf" alt="">
                          </a>
                        </td>
                        <td>5147718577690243</td>
                        <td>Krisgianto</td>
                        <td>Ds.Karya Bakti RT. 008 Desa MUlawarman</td>
                        <td>L 100 × P 25</td>
                        <td>2500</td>
                        <td>Pertanian</td>
                        <td>TENGGARONG SEBERANG</td>
                        <td>BUKIT PARIAMAN</td>
                        <td>1994</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <tr>
              <div class="container-fluid">
                <div class="row">
                  <div class="credits ml-auto">
                    <span class="copyright">
                      ©
                      <script>
                        document.write(new Date().getFullYear())
                      </script> by UMKT
                    </span>
                  </div>
                </div>
              </div>
              </footer>
          </div>
        </div>
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <script src="../assets/demo/demo.js"></script>
        <script>
          $(document).ready(function() {
            demo.initChartsPages();
          });
        </script>
</body>

</html>