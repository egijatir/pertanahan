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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <center>     <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="berhasil"){
		echo "<script language = javascript>Swal.fire({
      position: '',
      icon: 'success',
      title: 'Welcome' ,
      showConfirmButton: false,
      timer: 1500
    })</script>";
		}elseif($_GET['pesan']=="tolak"){
      echo "<script language = javascript>Swal.fire({
        icon: 'error',
        title: 'Oops... 404 Not Found',
        text: 'Akses Di Tolak!',
      })</script>";
		} 
	}?>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a data-toggle="collapse" href="#masterdata">
            <i class="fas fa-folder-open"></i>
              <p>Master Data <b class="caret"></b></p>
            </a>
            <div class="collapse " id="masterdata">
              <ul class="nav">
                <li class="active ">
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
            <a class="navbar-brand" href="javascript:;">Desa </a>
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
        <b>  <h3>Manajemen Data Desa/Kelurahan</h3></b>

        </div>
        
  <?php
$data_desa= mysqli_query($koneksi,"SELECT * FROM desa");
$jumlah_desa = mysqli_num_rows($data_desa);
?>
      </center>  
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <a href="desa.php?pesan=tolak"   class="btn btn-primary">
                    <i class="fas fa-user-plus    "></i>
                    Tambah Data
                  </a>
                  <div class="">
                    <a href="desa.php?pesan=tolak"  target="blank" class="btn btn-danger" title="Cetak PDF">
                      <i class="fas fa-file-pdf    "></i>
                    </a>
                    <a href="desa.php?pesan=tolak" class="btn btn-success" title="Export Excel">
                      <i class="fas fa-file-excel    "></i>
                    </a>
                  </div>
                </div>
              </div>
           <?php

              $sql2   = "select * from desa order by id_desa asc";

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
                          <th>Kode Desa/Kelurahan</th>
                          <th>Nama Desa/Kelurahan</th>
                          <th>Kecamatan</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                      <?php 
				$batas = 7;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from desa");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($koneksi,"select * from desa limit $halaman_awal, $batas");
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
                                  <a class="dropdown-item" href="desa.php?pesan=tolak">
                                    <i class="fas fa-edit    "></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="desa.php?pesan=tolak">
                                    <i class="fas fa-trash    "></i>
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                          <td style="width: 50px" class="text-center" ><p class="upper"><?php echo $nomor++ ?></td>
                          <td style="width: 50px" class="text-center" ><?php echo $r2['kode_desa'] ?></td>
                          <td style="width: 50px" class="text-center"><p class="upper"><?php echo $r2['nama_desa'] ?></td>
                          <td style="width: 50px" class="text-center"> <p class="upper"><?php echo $r2['kecamatan'] ?></td>
                        </tr>
                      </tbody>
                    <?php } 
                    error_reporting(0);
                    ?>
                    </table>
                    <nav>
			<ul class="pagination justify-content-left">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
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
                <div class="modal fade" id="modalForm" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Memasukan Data Desa/Kelurahan</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="../sistem/input-desa.php" method="post" name="data">
                  <div class="form-group">
                    <label for="inputName"><b>Id Desa</label>
                    <input type="text" name="id_desa" class="form-control" disabled value="Isi Otomatis Oleh Sistem">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail"><b>Kode Desa/Kelurahan</label>
                    <input type="text" name="kode_desa" class="form-control" required placeholder="Masukan Kode Desa">
                  </div>
                  <div class="form-group">
                    <label for="inputMessage"><b>Nama Desa/Kelurahan</label>
                    <input type="" name="nama_desa" class="form-control" required placeholder="Masukan Nama Desa">
                  </div>
                  <div class="form-group">
                    <label for="inputMessage"><b>Kecamatan</label>
                    <input type="" name="kecamatan" class="form-control" required placeholder="Masukan Kecamatan" > 
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalForm1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Memasukan Excel</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
              </div> 
      <form method="post" enctype="multipart/form-data" action="../sistem/upload-excel.php">
	        <input name="filepegawai" type="file" required="required"> 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input name="upload" type="submit" value="Import" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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