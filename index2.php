<meta charset="utf-8">
<?php
$mysqli = new mysqli("localhost","root","","kalys");
if($mysqli -> connect_errno){
    echo "not connection to database (".$mysqli->connect_errno.")".
        $mysqli->connect_error;
}
else{
    echo "Connected to  database <br/>";
}
$mail=$_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pass=$_POST['password'];

$sql ="select * from users where email = '".$mail."' and password='".$pass."'";
$result= $mysqli->query($sql);
$sql="INSERT INTO users (email, firstname, lastname, password)
VALUES
('".$mail."','".$firstname."','".$lastname."','".$pass."' )";
if (!$result){
    echo"there was ".$mysqli->error;die;
}

if ($result->fetch_assoc())
header("Location: http://localhost://lesson/index.html");  else header("Location: http://localhost://lesson/authorization.html");




?>

