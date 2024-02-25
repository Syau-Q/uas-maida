<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<center><h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah tampilan admin dari website An-Nida Boarding School (ANBS).</p>
                        <p>Anda dapat meninjau, menginput ataupun mengedit data di sini.</p>
                        <br>
						<p><a class="btn btn-primary btn-lg" href="tampil-pesertadidik.php" role="button">Peserta Didik</a>
						<a class="btn btn-success btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>