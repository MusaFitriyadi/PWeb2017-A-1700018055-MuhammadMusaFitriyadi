<!DOCTYPE html>
<html>
<head>
	<title>Mesin Uad</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/customlogin.css">
	<script type="text/javascript">
		function muncul(){
				var x = document.getElementById("kotakku");
				if (x.style.display === "none") 
				{
			        x.style.display = "block";
			    } 
			    else 
			    {
			        x.style.display = "none";
			    }
		}
	</script>
</head>
<body>
	<div id="wrapper">
		<section class="top-wrapper">
				<div id="top-menu">
					<button type="button" class="linkcustom">MuMail</button>
					<button type="button" class="linkcustom">Search Gambar</button>
					<img src="../assets/image/kotak.png" id="kotak"></img>
					<input type="image" onclick="muncul()" name="profile-img" id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" >
				</div>
					<div id="kotakku" style="display: none;">
						<div class="arrow-up">
						</div>
						<div id="kertas">
							<?php 
							require './proses.php';
							echo "Halo.. <br>";
							echo "<b>$nama</b>";
							echo "<br>";
							?>
							<a href="../login.php">Logout</a>
						</div>
					</div>
		</section>
		<section class="content-wrapper">
				<div id="content-utama">
					<center>
					<img src="../assets/image/logo.png" id="logoutama">
					<div class="form-group">				
						<input type="text" class="form-control" id="pencarian">
						<button type="button" class="btn btn-light">Pencarian Uad</button>
						<button type="button" class="btn btn-light">Saya Lagi Beruntung !!!</button></br>
						<div id="bahasa">
						Bahasa yang Tersedia : <button type="button" class="linkcustom">Indonesia</button>
						<button type="button" class="linkcustom">English</button>
						</div>
					</div>
					</center>
				</div>
		</section>
		<section class="Footer">
			<div class="isi">
				<div id="data-awal">
					Indonesia
				</div>
			</div>
			<div class="isi2">
				<div id="data-awal2">
					<div id="kiri">
						<button type="button" class="linkcustom">Periklanan</button>
						<button type="button" class="linkcustom">Bisnis</button>
						<button type="button" class="linkcustom">Tentang</button>
					</div>
					<div id="kanan">
						<button type="button" class="linkcustom">Privasi</button>
						<button type="button" class="linkcustom">Persyaratan</button>
						<button type="button" class="linkcustom">Setelan</button>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>