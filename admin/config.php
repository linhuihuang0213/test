<?php
	$servername="localhost";
	$sername="root";
	$password="hooray";
	$dbname="skingblog";
	$conn=mysqli_connect($servername,$sername,$password,$dbname);
	/*设置中文乱码*/
	mysqli_query($conn,"set names utf8");
?>