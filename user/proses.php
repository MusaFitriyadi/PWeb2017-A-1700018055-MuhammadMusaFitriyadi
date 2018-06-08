<?php 
$namafile = "./history.txt";
$myfile = fopen("$namafile", "r");
$nama = fgets($myfile);
$email = fgets($myfile);
$password = fgets($myfile);
 ?>