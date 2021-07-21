<?php

include("database.php");

$r="select * from user";

$t=mysqli_query($c, $r);


while($u=mysqli_fetch_array($t))


{

extract($u);

$x=$username;

$y=$password;

if($_POST ['username']==$x && $_POST['password']==$y)


{

echo"valid user";

include("uservalid.php");

}

else

echo"not a valid user";
}
?>