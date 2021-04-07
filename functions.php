<?php 
function connect_db() {
	$par1_ip = "127.0.0.1";
	$par2_name = "Poliakova";
	$par3_p = "qwerty";
	$par4_db = "toys";

	$induction = mysqli_connect($par1_ip,  $par2_name, $par3_p, $par4_db);

	if($induction == false) {
		echo "Ошибка подключения";
	}
	return $induction;
}


function get_goods($db,$search = FALSE) {
 //Запрос на выборку все товаров
 $sql = "SELECT * FROM assort";

 if($search) {
	$sql .= " WHERE toyname LIKE '%$search%'";
 }
 
 $result = mysqli_query($db,$sql);

for($i = 0;$i < mysqli_num_rows($result); $i++) {
 	$goods[] = mysqli_fetch_array($result);
}
 
 return $goods;
}
 ?>