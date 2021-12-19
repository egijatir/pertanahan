<?php
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if ($_SESSION['level'] == "") {
  header("location:../index.php?pesan=belum_login");
}

$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
$level = $_SESSION["level"];
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
  <!--     Fonts and icons     -->
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
          Welcome <?php echo $username ?>
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
                  <a href="desa.php">
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
          <li class="active ">
            <a href="Profile.php">
              <i class="fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="" data-toggle="modal" data-target="#modalForm2">
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
            <a class="navbar-brand" href="javascript:;">Profile </a>
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
      <center>     <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="berhasil"){
			echo "<div class='alert alert-success' role='alert'>Data Berhasil Di tambahkan !!</div>";
		}
    elseif($_GET['pesan']=="hapus"){
			echo "<div class='alert alert-danger' role='alert'>Data Berhasil Di Hapus !!</div>";
		} elseif($_GET['pesan']=="update"){
			echo "<div class='alert alert-warning' role='alert'>Data Berhasil Di Update !!</div>";
		}
	}
	?>
        <div class="row">
          <div class="col-md-3">
          
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="http://151.106.125.164/img/profile.png" alt="User profile picture">
                </div><hr/>
                <h3 class="profile-username text-center"><?php echo $nama ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <?php
                  $sql2   = "SELECT * FROM user WHERE  id_user='$id_user'";
                  $q2     = mysqli_query($koneksi, $sql2);
                  $row=mysqli_fetch_array($q2);
                  ?>
                  <div class="tab-pane active" id="profile">
                    <form class="form-horizontal" action="#"method="POST">
                      <input type="hidden" name="_token" value="HQ1unkVOj228trgSAbf8pUaxqM0mVvSO0wj9vQJz"> <input type="hidden" name="_method" value="PUT">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="<?php echo $row['nama']?>" class="form-control " id="inputName" placeholder="Name" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control " id="inputEmail"  readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" value="<?php echo $row['username']?>" class="form-control " id="inputEmail"  readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName3" class="col-sm-3 col-form-label">Nama Pejabat</label>
                        <div class="col-sm-9">
                          <input type="text" name="pejabat" value="<?php echo $row['nama']?>" class="form-control " id="inputName3" placeholder="Nama Pejabat" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputNip" class="col-sm-3 col-form-label">NIP Pejabat</label>
                        <div class="col-sm-9">
                          <input type="text" name="nip" value="<?php echo $row['nip_pejabat']?>" class="form-control " id="inputNip" placeholder="NIP Pejabat" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputGol" class="col-sm-3 col-form-label">Golongan/Pangkat</label>
                        <div class="col-sm-9">
                          <input type="text" name="golongan_pangkat" value="<?php echo $row['pangkat']?>" class="form-control " readonly id="inputGol" placeholder="Golongan/Pangkat">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat Kantor</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" value="<?php echo $row['alamat']?>" class="form-control "readonly id="inputAlamat" placeholder="Alamat Kantor">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                        </div>
                      </div>
                    </form>
                    <A href="../sistem/edit-profile.php?id_user=<?php echo $row['id_user']; ?>"> <button  class="btn btn-success">Update</button></A> <A href="../sistem/edit-profile-password.php?id_user=<?php echo $row['id_user']; ?>"> <button  class="btn btn-danger">Ubah Password</button></A>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <section>
      
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
                    </footer>     <br>    
        </section>
        <div class="modal fade" id="modalForm2" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Yakin Ingin logout ?</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="../sistem/logout.php"><input name="upload" type="submit" value="Logout" class="btn btn-danger"></a>
              </div>
            </div>
          </div>
        </div>
    </div>
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