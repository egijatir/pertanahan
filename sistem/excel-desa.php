<?php
include('koneksi.php');
$sql2   = "select * from desa order by id_desa desc";

// ini but tmpilkn dt
$q2     = mysqli_query($koneksi, $sql2);
$urut   = 1;
while ($r2 = mysqli_fetch_array($q2)) {
  $id_desa         = $r2['id_desa'];
  $nama_desa    = $r2['nama_desa'];
  $kode_desa            = $r2['kode_desa'];
  $kecamatan          = $r2['kecamatan'];
?>
  <!-- /.card-header -->
      <table border="1" width="900" cellpadding="10">
          <tr class="text-center">
            <th  >No</th>
            <th>Kode Desa/Kelurahan</th>
            <th>Nama Desa/Kelurahan</th>
            <th>Kecamatan</th>
          </tr>

          <tr>
          <td style="width: 50px" class="text-center"><?php echo $urut++ ?></td>
            <td style="width: 50px" class="text-center"><?php echo $kode_desa ?></td>
            <td style="width: 50px" class="text-center"><?php echo $nama_desa ?></td>
            <td style="width: 50px" class="text-center"><?php echo $kecamatan ?></td>
          </tr>

      <?php } ?>
      </table>