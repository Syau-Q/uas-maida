<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['mahasiswa_id'];
$nim=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update pesertadidik set nisn='$nisn', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where mahasiswa_id='$id'");

if($ubah==true){

    header("location:tampil-pesertadidik.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>