<?php 
	$par1_ip = "127.0.0.1";
	$par2_name = "Poliakova";
	$par3_p = "qwerty";
	$par4_db = "toys";

	$induction = mysqli_connect($par1_ip,  $par2_name, $par3_p, $par4_db);

	if($induction == false) {
		echo "Ошибка подключения";
	}
 ?>