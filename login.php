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

$sql = "INSERT INTO UserTable (Name,Username,password)
VALUES ('{$_POST['Username']}','{$_POST['password']}','{$_POST['Name']}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<center>
<div class="form-group">
<form action="http://localhost:8080/LetsPlayPoker" method="post">


<label> Username </label>


<input type="text" name="Username"> </br>
</div>

<div class="form-group">

<label> name </label>

<input type="text" name="Name"> </br>
</div>


<label> password </label>
<input type="password" name="password"> </br>
</div>


<input type="submit"  class="btn btn-primary btn-lg" name="submit" value="Register And Lets Play">  </br>


<img src="https://img.memesuper.com/78f49873a432310b894a21f955db2d71_poker-meme-memesuper-meme-poker-poker-meme-and-memes-poker-poker-meme-images_461-352.jpeg">




</div>



</form>
</center>


					


</body>
</html>