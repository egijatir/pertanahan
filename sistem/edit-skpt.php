<?php
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if ($_SESSION['level'] == "") {
  header("location:../index.php?pesan=belum_login");
}

  ?>
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
  <link rel="stylesheet" href="/path/to/dropify.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <script src="https://kit.fontawesome.com/2a985d6dcf.js" crossorigin="anonymous"></script>
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 5000);
  </script>

  <style type="text/css">
    .upper {
      text-transform: uppercase;
    }

    .lower {
      text-transform: lowercase;
    }

    .cap {
      text-transform: capitalize;
    }

    .button {
      background-color: Transparent;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
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
          Welcome <?php echo $_SESSION['level']; ?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
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
                  <a href="profile.php">
                    <span class="sidebar-mini-icon"><i class="fas fa-angle-right"></i></span>
                    <span class="sidebar-normal"> desa</span>
                  </a>
                </li>
              </ul>
          </li>
          <li>
            <a href="SKPT.php">
              <i class="fas fa-file-alt"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li >
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
            <a class="navbar-brand" href="../page/SKPT.php"><i class="fas fa-arrow-left text-danger"></i></a>
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Data Pemohon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="http://151.106.125.164/skpt" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="HQ1unkVOj228trgSAbf8pUaxqM0mVvSO0wj9vQJz">
                <div class="card-body">

                  <div class="form-group">
                      <label for="nama_pemohon">Nama Pemohon</label>
                      <input type="text" class="form-control " name="nama_pemohon" onkeyup="myFunction()" id="nama_pemohon" value="" placeholder="Nama Pemohon" autofocus="">
                                        </div>

                  <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" class="form-control " name="nik" id="nik" value="" placeholder="Nomor Induk Kependudukan">
                                        </div>

                  <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control " name="tempat_lahir" id="tempat_lahir" value="" placeholder="Tempat Lahir" autofocus="">
                                        </div>

                  <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control " name="tgl_lahir" id="tgl_lahir" value="" autofocus="">
                                        </div>

                  <div class="form-group">
                      <label for="alamat_pem">Alamat Pemohon</label>
                      <textarea class="form-control " name="alamat_pem" id="alamat_pem" rows="3"></textarea>
                                          </div>
                    <div class="form-group d-flex justify-content-end">
                  </div>

                  <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control " name="pekerjaan" onkeyup="myFunction()" id="pekerjaan" value="" placeholder="Pekerjaan" autofocus="">
                                        </div>

                  <div class="form-group">
                      <label for="gambar">UPLOAD SCAN DOKUMEN LAMPIRAN KELENGKAPAN</label>
                      <div class="dropify-wrapper" style="height: 114px;"><div class="dropify-message"><span class="file-icon"> <p></p></span><p class="dropify-error">Ooops, something wrong happended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" class="form-control logo " name="gambar" id="gambar" value="" data-default-file="" data-height="100"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                        </div>

                </div>
                <!-- /.card-body -->

            </form></div>

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alamat Objek Tanah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="form-group">
                    <label for="alamat_objek">Alamat Lokasi Tanah (Jalan/Gang/Blok)</label>
                    <textarea class="form-control " name="alamat_objek" id="alamat_objek" rows="3"></textarea>
                                    </div>

                <div class="form-group">
                    <label for="rt_rw">Rukun Tetangga (RT)/Rukun Warga (RW)</label>
                    <input type="text" class="form-control " name="rt_rw" id="rt_rw" value="" placeholder="Rukun Tetangga (RT)/Rukun Warga (RW)" autofocus="">
                                    </div>

                <div class="form-group">
                    <label for="kelurahan_id">Desa/Kelurahan</label>
                    <select name="kelurahan_id" id="kelurahan_id" class="form-control ">
                        <option value="">-Pilih Desa/Kelurahan-</option>
                        
                        <option value="6402012001">
                            
                            PERIAN
                        </option>
                        
                        <option value="6402012002">
                            
                            MUARA LEKA
                        </option>
                        
                        <option value="6402012003">
                            
                            MUARA ALOH
                        </option>
                        
                        <option value="6402012004">
                            
                            JANTUR
                        </option>
                        
                        <option value="6402012005">
                            
                            BATUQ
                        </option>
                        
                        <option value="6402012006">
                            
                            REBAQ RINDING
                        </option>
                        
                        <option value="6402012007">
                            
                            MUARA MUNTAI ULU
                        </option>
                        
                        <option value="6402012008">
                            
                            MUARA MUNTAI ILIR
                        </option>
                        
                        <option value="6402012009">
                            
                            KAYU BATU
                        </option>
                        
                        <option value="6402012010">
                            
                            JANTUR SELATAN
                        </option>
                        
                        <option value="6402012011">
                            
                            TANJUNG BATUQ HARAPAN
                        </option>
                        
                        <option value="6402012012">
                            
                            PULAU HARAPAN
                        </option>
                        
                        <option value="6402012013">
                            
                            JANTUR BARU
                        </option>
                        
                        <option value="6402022001">
                            
                            JONGGON DESA
                        </option>
                      
                    </select>
                                    </div>

                <div class="form-group">
                    <label for="penggunaan">Penggunaan Tanah</label>
                    <textarea class="form-control " name="penggunaan" id="penggunaan" rows="2"></textarea>
                                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Ukuran Tanah</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                        <label for="luas_tanah">Total Luas Tanah (M<sup>2</sup>)</label>
                        <input type="text" class="form-control " name="luas_tanah" id="luas_tanah" value="" placeholder="Luas Tanah (Meter Persegi)">
                                            </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                        <label for="uk_panjang">Ukuran Panjang Tanah (M)</label>
                        <input type="text" class="form-control " name="uk_panjang" id="uk_panjang" value="" placeholder="Ukuran Panjang Tanah">
                                            </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                        <label for="uk_lebar">Ukuran Lebar Tanah (M)</label>
                        <input type="text" class="form-control " name="uk_lebar" id="uk_lebar" value="" placeholder="Ukuran Lebar Tanah">
                                            </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Riwayat Penguasaan Tanah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group">
                      <label for="thn_penguasaan">Tahun Penguasaan</label>
                      <input type="number" min="1900" max="2099" step="1" value="2021" class="form-control " name="thn_penguasaan" id="thn_penguasaan" placeholder="Tahun Penguasaan Tanah" autofocus="">
                                        </div>

                  <div class="form-group">
                      <label for="perolehan_tnh">Cara Perolehan Tanah</label>
                      <input type="text" class="form-control " name="perolehan_tnh" onkeyup="myFunction()" id="perolehan_tnh" value="" placeholder="Perolehan Tanah" autofocus="">
                                        </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Koordinat Dan Batas Tanah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Latitude <br>Format DD(-0.4316169) <br>Format UTM(509084)</label>
                            <input type="text" class="form-control " name="lat_p1" onkeyup="myFunction()" id="lat_p1" value="" placeholder="Lat P1" autofocus="">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Longitude <br>Format DD(116.9710688) <br>Format UTM(9962934)</label>
                            <input type="text" class="form-control " name="long_p1" onkeyup="myFunction()" id="long_p1" value="" placeholder="Long P1" autofocus="">
                                                      </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <input type="text" class="form-control " name="lat_p2" onkeyup="myFunction()" id="lat_p2" value="" placeholder="lat P2" autofocus="">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="text" class="form-control " name="long_p2" onkeyup="myFunction()" id="long_p2" value="" placeholder="Long P2" autofocus="">
                                                      </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <input type="text" class="form-control " name="lat_p3" onkeyup="myFunction()" id="lat_p3" value="" placeholder="Lat P3" autofocus="">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="text" class="form-control " name="long_p3" onkeyup="myFunction()" id="long_p3" value="" placeholder="Long P3" autofocus="">
                                                      </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <input type="text" class="form-control " name="lat_p4" onkeyup="myFunction()" id="lat_p4" value="" placeholder="Lat P4" autofocus="">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="text" class="form-control " name="long_p4" onkeyup="myFunction()" id="long_p4" value="" placeholder="Long P4" autofocus="">
                                                      </div>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="koordinat">Koordinat Lebih dari 4 Titik</label>
                          <p align="justify">Isikan Koordinat pada form berikut dengan contoh format pengisian memberikan tanda koma (,) sebagai pemisah setiap titik koordinat contoh 
                            <br>(-0.866753 116.686455, -0.859819 116.708942, -0.851475 116.722675, -0.841611 116.720615, -0.834023 116.708427, -0.840744 116.689373, -0.858735 116.673923, -0.866753 116.686455)
                            <br>
                            Aplikasi hanya menerima Sistem proyeksi geografis Desimal Derajat (DD) dan Universal Transver Mercator (UTM) sebagai standard data pengisian.
                          </p>
                          <textarea class="form-control " name="koordinat" id="koordinat" rows="3"></textarea>
                                                </div>

                      <div class="form-group">
                          <label for="bts_utara">Batas Utara</label>
                          <input type="text" class="form-control " name="bts_utara" onkeyup="myFunction()" id="bts_utara" value="" placeholder="Batas Utara" autofocus="">
                                                </div>
                      <div class="form-group">
                          <label for="bts_timur">Batas Timur</label>
                          <input type="text" class="form-control " name="bts_timur" onkeyup="myFunction()" id="bts_timur" value="" placeholder="Batas Timur" autofocus="">
                                                </div>
                      <div class="form-group">
                          <label for="bts_selatan">Batas Selatan</label>
                          <input type="text" class="form-control " name="bts_selatan" onkeyup="myFunction()" id="bts_selatan" value="" placeholder="Batas Selatan" autofocus="">
                                                </div>
                      <div class="form-group">
                          <label for="bts_barat">Batas Barat</label>
                          <input type="text" class="form-control " name="bts_barat" onkeyup="myFunction()" id="bts_barat" value="" placeholder="Batas Utara" autofocus="">
                                                </div>

                      <div class="card-footer">
                        <a class="btn btn-warning " href="http://151.106.125.164/skpt">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

                  </div>
                  <div class="form-group">
                  </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <script>
                document.write(new Date().getFullYear())
              </script> by UMKT
            </div>
          </div>
        </div>
      </footer>
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