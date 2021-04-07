<?php 
require "header.php";
$page = $_GET['page'];
require 'pages/'.$page.'.php';
require "footer.php";
 ?>