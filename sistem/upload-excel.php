<?php
include "excel_reader2.php";
include "koneksi.php";
 
// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;
 
for ($i=2; $i<=$hasildata; $i++)
{
  $data1 = $data->val($i,2); 
  $data2 = $data->val($i,3);
  $data3 = $data->val($i,4);
  $created_by = 'Admin'; 
  $date = date('Y-m-d H:i:s');
  $rand = rand();
 
$query = "INSERT INTO desa  VALUES (null,'$data1','$data2','$rand', '$created_by', '$date')";
$hasil = mysqli_query($koneksi,$query);
 
if ($hasildata) $sukses++;
else $gagal++;
 
echo "< pre>";
print_r($query);
echo "< /pre>";
 
}
echo "<b>import data selesai.</b>";

echo "back import";
?>