<?php 
	$emailinput = $_POST['inputEmail'];
	$passwordinput = $_POST['inputPassword'];


	$namafile = "./emailterdaftar/$emailinput.txt";
	if(file_exists("$namafile")){
		$myfile = fopen("$namafile", "r");
		$nama = fgets($myfile);
		$email = fgets($myfile);
		$password = fgets($myfile);

		if( $password != $passwordinput ){
			$nama=null;
			$email=null;
			$password=null;
			echo "<script>alert('Email dan Password Yang Dimasukkan Salah');</script>";
			require 'login.php';
		}
		else{
			$buat = fopen("./user/history.txt", "w");
			fwrite($buat, "$nama".PHP_EOL);
			fwrite($buat, "$email".PHP_EOL);
			fwrite($buat, $password);
			fclose($buat);
			header('location:./user/');
		}
		fclose($myfile);
	}
	else {
		echo "<script>alert('Email dan Password Yang Dimasukkan Salah');</script>";
		require 'login.php';
	}
 ?>