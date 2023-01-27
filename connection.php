<?php

$host = "localhost";

//$username = "id20139699_root";
$username = "root";
//$password = "2]ML9}c(Srg6Z)T/";
$password = "";
//$dbname = "id20139699_db_student";
$dbname = "db_student";


//สร้างการเชื่อมต่อ

//$conn = new mysqli($host, $username, $password,$dbname);

$conn = mysqli_connect($host, $username, $password,$dbname);



	mysqli_query($conn,"SET NAMES UTF8");

	

//ตรวจสอบการเชื่อมต่อ

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 







?>