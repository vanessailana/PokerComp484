<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
 <title>Let's Play</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PokerTime";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Scores (Username,Score)
VALUES ('{$_POST['Username']}','{$_POST['Score']}')";



if ($conn->query($sql) === TRUE) {
    echo "<h1> After You Add Your Score </h1> <p></p> <h1> You have <kbd> Two </kbd> Options <h1> You CAN either LOGOUT <a href='logout.php' class='btn btn-primary'> Logout</a> </h1> <h1> You CAN EITHER PLAY AGAIN  <a href='http://localhost:8080/LetsPlayPoker' class='btn btn-primary'> Lets Play </a> </h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<center>
<div class="form-group">
<form action="addscores.php" method="post">


<label> Username </label>


<input type="text" name="Username"> </br>
</div>




<label> Score </label>
<input type="password" name="Score"> </br>
</div>


<input type="submit"  class="btn btn-primary btn-lg" name="submit" value="Add Yo Score">  </br>





</div>



</form>
</center>


					


</body>
</html>
