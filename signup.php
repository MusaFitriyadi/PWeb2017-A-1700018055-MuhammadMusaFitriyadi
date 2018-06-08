<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Email</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/customsignup.css">
</head>
<body>
	<div id="wrapper">
		<div id="main-wrapper">
			<div id="kiri">
				<center>
				<p id="Namakuaja">Musa Fitriyadi</p>
				<p id="Nim">1700018055</p>
				<div id="garis"></div>
				<p id="Ket">Web sederhana ini saya buat, dengan terinspirasi dari gmail milik google.
				seluruh data inputan dari pendaftaran oleh user, saya simpan ke folder user dalam bentuk txt, yang kemudian data itu bisa user gunakan untuk login, layaknya google. Namun ini hanya sekedar untuk pengumpulan tugas, bukan untuk digunakan secara massal, dan email yang terdaftar pun tidak akan bisa dipakai untuk mengirim email kepada orang lain. Terima kasih</p>
				</center>
			</div>
			<div id="kanan">
				<p id="daftar">DAFTAR EMAIL BARU</p>
				<div class="form-group">
				<form action="proses.php" method="get">
    				<input type="text" class="form-controlnama" id="nama" name="namaku" placeholder="Masukkan Nama Anda" autocomplete="none">
    				<input type="text" class="form-email" id="namaemail" name="emailku" placeholder="Nama Email Pendaftaran">
    				<div id="keterangan_email">@Musafitriyadi.com</div>
    				<input type="password" class="form-controlpassword" id="passwordku" name="passwordku" placeholder="Masukkan Password Anda">
    				<input type="password" class="form-controlpassword" id="passwordku2" name="passwordku2" placeholder="Tulis Ulang Password">
    				<input type="submit" name="submit" id="daftar2" value="Daftar Email">
    				<input type="button" name="reset" id="daftar4" value="Reset">
    			</form>
    			<a href="login"><input type="button" name="reset" id="daftar3" value="Login"></a>
 				 </div>

			</div>
		</div>
<!-- 			<div id="Footer">
		© 2018 Musa Signup Form. All rights reserved | Design by <a href="https://Musafitriyadi.com">MusaFitriyadi.com</a>
	</div> -->
	</div>

</body>
</html>