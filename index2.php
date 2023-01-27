<?php session_start(); 
include('connection.php');
 
  $ID = $_SESSION['a_id'];
  $name = $_SESSION['a_username'];
  $level = $_SESSION['a_level'];
 	if($level!='A'){
    Header("Location:logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<br>

		<div class="container">
        <a href="index.php" class="btn btn-success">ข้อมูลลูกค้า</a>
                <a href="index1.php" class="btn btn-success">ข้อมูลสินค้า</a>
                <a href="index2.php" class="btn btn-success">ข้อมูลประเภทสินค้า</a>
                <a href="index3.php" class="btn btn-success">ข้อมูลการขาย</a>
                <a href="index4.php" class="btn btn-success">ข้อมูลพนักงาน</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>

				
		<table id="mytable" class="table table-bordered table-striped">
        <br>
		<thead>
		<br>
		 <tr>
				<th>no</th>
				<th>Name</th>
				<th>LastName</th>
				<th>Address</th>
				<th>SunjectName</th>
				<th><center>Action</center></th>
		 </tr>
         <tr>
         <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Add</a>
         </tr>
 </thead>
 <tbody>
 
<?php
        include('connection.php');
        $sql = "SELECT * FROM tbl_product_type";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        //แสดงข้อมูลเป็นตาราง
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'. $row['t_id'] . '</td>';
            echo '<td>'. $row['t_name'] . '</td>';
            echo '<td>'. $row['t_detail'] . '</td>';
            
            echo '<td><a role="button"  href="update.php?c_no='.$row['c_no'].'" class="btn btn-warning">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
                echo '<a href="delete.php?c_no='.$row['c_no'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
                echo '&nbsp;<a href="ins_form2.php  " class="btn btn-success">Add</a>';  //ปุ่มที่เพิ่มเข้ามา
            echo '</tr>';
 }
 } else {
 echo " ";
 }
 $conn->close();
 ?>
 </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>