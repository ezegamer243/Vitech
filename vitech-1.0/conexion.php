<?php

function conectar(){

	$host="localhost";
	$user="root";
	$pass="";
	$db="bodega";

	$con=mysqli_connect("$host","$user","$pass","$db");
	return $con;
}

?>