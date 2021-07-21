<?php
session_start();
include("database1.php");
$a2 =$_POST['bname'];
$b2= $_POST['price'];
$c2= $_POST['quantity'];
$d2= $_POST['amount'];
//echo $a2;
// $x="create  table  cart(bname  varchar(100)  notnull, price  varchar(100)  notnull, quantity  varchar(100)
// notnull, amount varchar(100) notnull)";
// $y=mysqli_query($c, $x);
// if($x)
// echo "<br> created";
// else
// echo "<br>not created";
$query="INSERT INTO `cart`(`bname`, `price`, `quantity`, `amount`) VALUES('".$a2."', '".$b2."', '".$c2."', '".$d2."')"; 
$q=mysqli_query($c, $query); 

if($q)
echo "<br> inserted successfully";
else
echo "<br><br> not inserted";
session_unset(); 
?>
