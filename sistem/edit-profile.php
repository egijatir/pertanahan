
<?php
include 'koneksi.php';
$id_user  = $_GET['id_user'];
$data   = "SELECT * from user where id_user='$id_user'";
$data1  = mysqli_query($koneksi, $data);
$data2  = mysqli_fetch_array($data1);
error_reporting(0);
?>
<html>
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
<style>
        .mx-auto {
            width: 800px;
        }

        .card {
            width: 850px;
            margin-top: 50px;
            margin-left: 290px;
            margin-right: 290px;
        }
    </style>    
<body>
<div class="card">
  <div class="card-header">
  <h4>Edit Profile</h4> 
    <div class="mx-50 mx-auto border p-3 mt-3">
        <form action="edit-profile.php" method="post" name="data" width="400">
        
        <div class="form-group">
                <label for="inputName"><b>Id User</label>
                <input type="text" name="id_user" class="form-control" readonly value="<?php echo $data2['id_user'];?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>Username</label>
                <input type="" name="username" class="form-control" required value="<?php echo $data2['username'];?>">
            </div>  
            <div class="form-group">
                <label for="inputEmail"><b>Nama</label>
                <input type="text" name="nama" class="form-control" required value="<?php echo $data2['nama'];?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>Email</label>
                <input type="" name="email" class="form-control" required value="<?php echo $data2['email'];?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>NIP</label>
                <input type="" name="nip_pejabat" class="form-control" required value="<?php echo $data2['nip_pejabat'];?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>Golongan/Pangkat</label>
                <input type="" name="pangkat" class="form-control" required value="<?php echo $data2['pangkat'];?>">
            </div>
            <div class="modal-footer">
                <a href="../page/profile.php" style="color: #000000"><button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
            </div>
        </form>
    </div>
</html>
<?php
    $sql2   = "SELECT * FROM user WHERE  id_user='$id_user'";
    $q2     = mysqli_query($koneksi, $sql2);
    $row=mysqli_fetch_array($q2);
      if(isset($_POST['kirim'])){
        $id_user=$_POST['id_user'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nip =$_POST['nip_pejabat'];
        $user=$_POST['username'];
        $pangkat=$_POST['pangkat'];
        $kirim          =  " UPDATE user 
        SET id_user='$id_user',nama='$nama',email='$email',nip_pejabat='$nip',username='$user',pangkat='$pangkat' WHERE id_user='$id_user'";
        $query            = mysqli_query($koneksi, $kirim); 
       
header("location:../page/profile.php?pesan=update");
                    
      }
                    ?>