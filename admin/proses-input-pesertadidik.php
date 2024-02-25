<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nim=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pesertadidik(nisn,nama,jenis_kelamin,alamat) 
                        values ('$nisn', '$nama', '$jenis_kelamin', '$alamat')");

if($simpan==true){

    header("location:tampil-pesertadidik.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>