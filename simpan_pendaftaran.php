<!DOCTYPE html>
<html>
<head>
	<title> Daftar Peserta Didik Baru </title>
</head>
<body>
	<div style="margin: 0 auto; width: 80%;">
		<h2 align="center">Daftar Peserta Didik Baru TKIT Tahun Pelajaran 2024/2025 </h2>
		<table border="1" cellspacing="0" width="100%">
     			<tr style="text-align: center; font-weight: bold; background-color: #eee; font-family: sans-serif;">
     			    <td>no</td>
                    <td>nik</td>
     			    <td>nama_lengkap</td>
     			    <td>jenis_kelamin</td>
                    <td>tempat_lahir</td>
     			    <td>tgl_lahir</td>
     			    <td>alamat</td>
                    <td>no_hp</td>
     			    <td>asal_sekolah</td>
     			</tr>

     			<?php
     			include'koneksi.php';
     			$no = 1;
     			$tampil = mysqli_query($connection, "SELECT * FROM siswa_baru");
     			if (mysqli_num_rows($tampil)>0) {
     			while($hasil = mysqli_fetch_array($tampil)){
                ?>

    <tr style="text-align: center; font-family: sans-serif;">
        <td><?php echo  $no++ ?></td>
        <td><?php echo  $hasil['nama_lengkap'] ?></td>
        <td><?php echo  $hasil['jenis_kelamin'] ?></td>
        <td><?php echo  $hasil['tempat_lahir'] ?></td>
        <td><?php echo  $hasil['tgl_lahir'] ?></td>
        <td><?php echo  $hasil['alamat'] ?></td>
        <td><?php echo  $hasil['no_hp'] ?></td>
        <td><?php echo  $hasil['asal_sekolah'] ?></td>
    </tr>
<?php }}else{ ?>
	    <tr>

	        <td colspan="7" align="center">Data Kosong</td>
	    </tr>
<?php } ?>
</table>
 <script>
 	window.print();
 </script>

</div>
</body>
</html>