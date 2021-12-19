<?php
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if ($_SESSION['level'] == "") {
  header("location:../index.php?pesan=belum_login");
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
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
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 5000);
</script>

<style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
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
          Welcome <?php echo $username?>
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
          <li >
            <a data-toggle="collapse" href="#masterdata">
            <i class="fas fa-folder-open"></i>
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
          <li>
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
        <a class="navbar-brand" href="../page/dashboard.php"><i class="fas fa-arrow-left text-danger"></i></a> </a>
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
        <b>  <h3>Total User</h3></b>

        </div>
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
  <?php
$data_desa= mysqli_query($koneksi,"SELECT * FROM user");
$jumlah_desa = mysqli_num_rows($data_desa);
?>


      </center>  
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  
                  
                </div>
              </div>
           <?php

              $sql2   = "select * from user order by id_desa asc";

              // ini but tmpilkn dt
              $q2     = mysqli_query($koneksi, $sql2);
            
             ?>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-head-fixed text-nowrap table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th>#</th>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Golongan</th>
                          <th>Username</th>
                          <th>Jabatan</th>
                          <th>Role</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                      <?php 
				$batas = 5;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from user");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($koneksi,"select * from user limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($r2 = mysqli_fetch_array($data_pegawai)){
					?>
                        <tr>
                          <td style="width: 20px">
                            <div class="btn-group">
                          <button type="button" class="button" data-toggle="dropdown">
                                <i class="fas fa-ellipsis-v    "></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a class="dropdown-item" href="../sistem/edit-desa.php?id_desa=<?php echo $r2['id_desa']; ?>">
                                    <i class="fas fa-edit    "></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="../sistem/hapus-desa.php?id_desa=<?php echo $r2['id_desa']; ?>"onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                    <i class="fas fa-trash    "></i>
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                          <td style="width: 50px" class="text-center" ><p class="upper"><?php echo $nomor++ ?></td>
                          <td style="width: 50px" class="text-center" ><?php echo $r2['nama'] ?></td>
                          <td style="width: 50px" class="text-center"><p class="upper"><?php echo $r2['pangkat'] ?></td>
                          <td style="width: 50px" class="text-center"> <p class="upper"><?php echo $r2['username'] ?></td>
                          <td style="width: 50px" class="text-center"> <p class="upper"><?php echo $r2['username'] ?></td>
                          <td style="width: 50px" class="text-center"> <p class="upper"><?php echo $r2['level'] ?></td>
                        </tr>
                      </tbody>
                    <?php } 
                    error_reporting(0);
                    ?>
                    </table>
          
                    <div class="card-footer">
                        <span class="text-sm float-right">Total Entries :  
<?php echo $jumlah_desa; ?></span>
                    </div>
                    <br>  
                  </div>
                </div>
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
            <br><br>
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