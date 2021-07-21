<?php
session_start();
$_SESSION['a1']=isset($_POST['bname']) ? $_POST['bname'] : '';
$_SESSION['b1']=isset($_POST['price']) ? $_POST['price'] : ''; 
$_SESSION['c1']=isset($_POST['quantity']) ? $_POST['quantity'] : '';
$_SESSION['d1']=isset($_POST['amount']) ? $_POST['amount'] : '';
?>
<html>
<title>cart page</title>
<body>
<center>
<table width="100%" border="2">
<tr><th>Book Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Amount</th>
</tr>

<?php 

include("database1.php");
$sql="SELECT * FROM `cart`";
$res=mysqli_query($c,$sql);

while($st=mysqli_fetch_array($res))
{
?>
<tr>
<td align="center"><?php echo $st['bname']; ?></td>
<td align="center"><?php echo $st['price']; ?></td>
<td align="center"><?php echo $st['quantity']; ?></td>
<td align="center"><?php echo $st['amount']; ?></td>
</tr>

<?php
}
?>
</table>
</center>
<form action="cartform.html">
<input type="submit" value="insert into db"/>
</form>
<form action="logout.php">
<input type="submit" value="logout"/>
</form>
</body>
</html>
