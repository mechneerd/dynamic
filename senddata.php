﻿
    

<?php 


echo '<pre>';

var_dump(json_decode($_POST['values']));


/*
$sub='';


if($_SERVER['REQUEST_METHOD']='POST'){
	$sub = $_POST['subject'];
	print_r ($sub);
}



$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";
GLOBAL $counter;
$con = new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO homework (subject) VALUES($sub)";


if($con->query($sql)){
	echo 'data sent';
	}else{
	echo 'no data sent';
}

*/

?>







