<?php 
// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","root","PokerTime");
if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
  else {
  	 echo "hi";
  }
?>