
<?php
include 'koneksi.php';
$id_desa  = $_GET['id_desa'];
$data   = "SELECT * from desa where id_desa='$id_desa'";
$data1  = mysqli_query($koneksi, $data);
$data2  = mysqli_fetch_array($data1);

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
  <h4>Edit Data Desa/Kelurahan</h4> 

    <div class="mx-50 mx-auto border p-3 mt-3">
        <form action="edit-desa.php" method="post" name="data" width="400">
            <div class="form-group">
                <label for="inputName"><b>Id Desa</label>
                <input type="text" name="id_desa" class="form-control" required value="<?php echo $data2['id_desa']; ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail"><b>Kode Desa</label>
                <input type="text" name="kode_desa" class="form-control" required value="<?php echo $data2['kode_desa']; ?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>Nama Desa</label>
                <input type="" name="nama_desa" class="form-control" required value="<?php echo $data2['nama_desa']; ?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>kecamatan</label>
                <input type="" name="kecamatan" class="form-control" required value="<?php echo $data2['kecamatan']; ?>">
            </div>
            <div class="modal-footer">
                <a href="../page/desa.php" style="color: #000000"><button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
            </div>
        </form>
        <?php
        if (isset($_POST['kirim'])) {
            $id_desa    = $_POST['id_desa'];
            $kode_desa  = $_POST['kode_desa'];
            $nama_desa  = $_POST['nama_desa'];
            $kecamatan   = $_POST['kecamatan'];
           
            $kirim          =  " UPDATE desa 
                                SET id_desa='$id_desa',kode_desa='$kode_desa',nama_desa='$nama_desa',kecamatan='$kecamatan'
                                  WHERE id_desa='$id_desa'";
            $query            = mysqli_query($koneksi, $kirim);
            header("location:../page/desa.php?pesan=update");
        }

        ?>
    </div>

</html>