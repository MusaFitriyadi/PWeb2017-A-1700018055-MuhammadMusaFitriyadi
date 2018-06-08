<?php 
	$namaku = $_GET['namaku'];
	$emailku = $_GET['emailku'];
	$passwordku = $_GET['passwordku'];
	$passwordku2 = $_GET['passwordku2'];
	$namafile = "./emailterdaftar/$emailku@musafitriyadi.com.txt";

	if ($namaku=="" || $namaku==null) {
	 	echo "<script>alert('Isi Nama Anda')</script>";
		include 'signup.php';
		return false;
	 }
	 else if ($emailku=="" || $emailku==null) {
	 	echo "<script>alert('Isi Nama Email Anda')</script>";
		include 'signup.php';
		return false;
	 }
	 // if($emailku==t.value.match(/\s/g)){
		// alert('Sorry, you are not allowed to enter any spaces');
		// t.value=t.value.replace(/\s/g,'');
	 // }
	 else if ($passwordku=="" || $passwordku==null || $passwordku2==null || $passwordku2=="") {
	 	echo "<script>alert('Isi Password Anda')</script>";
		include 'signup.php';
		return false;
	 }
	 else if ($passwordku!=$passwordku2) {
	 	echo "<script>alert('Masukkan Password Yang Sama')</script>";
		include 'signup.php';
		return false;
	 }
	 else{
	 	 echo "<script>alert('Email Berhasil dibuat')</script>";
	 	$myfile = fopen("$namafile", "w");
	 	$enter = "\n";
		$nama =  $namaku .PHP_EOL;
		$email =  "$emailku@musafitriyadi.com" .PHP_EOL;
		$password = $passwordku;
		fwrite($myfile, $nama);
		fwrite($myfile, $email);
		fwrite($myfile, $password);
		fclose($myfile);
		include 'login.php';
	 }
 ?>