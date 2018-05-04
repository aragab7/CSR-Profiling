<?php

$dbconnect=mysqli_connect("localhost","root,"uber");
if (mysqli_connect_errno($dbconnect)) {
  echo "failed to connect";
}
  else {echo "Connection successful";}

?>
