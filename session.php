<?php 
session_start();
if(!isset($_SESSION["Username"])){
 echo"<meta http-equiv=refresh content=1;url=index.php>";//ย้ายไปยังหน้าหลัก
   exit;
}
if($_SESSION["Userlevel"]!= "A") {
echo "This page for Admin and teacher only!";
echo "<a href=index.php>Back</a>";
exit();
}
?>