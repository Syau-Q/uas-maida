<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted">Apa yang dapat kami bantu?</h2>
				<p> Tuliskan pertanyaan, saran dan masukan Anda di bawah ini.</p>
					<form action="#" method="post">
						<table class="table table-hover">
							<tr>
								<td>Alamat Email
								<input type="email" name="email" class="form-control input-md" placeholder="Masukkan email aktif Anda!" required>
								</td>
							</tr>
							<tr>
								<td>Komentar
								<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
								</i><input type="submit" value="Send" class="btn btn-lg btn-info"> <input type="reset" value="Cancel" class="btn btn-lg btn-warning"></i>
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->

		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>