<?php
$name = $password = $email = $gender = "";
$link = new mysqli("localhost","root","","bloggers");
if(!$link)
echo "connection_aborted";
else if($_SERVER['REQUEST_METHOD']=="POST")
{
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$a = "INSERT INTO userdata (name,userid,password,gender) VALUES ('$name','$email','$password','$gender'); ";
if ($link->query($a)) {
	header('Location:insert.php');
}
else
echo "Data not entered";
}
?>
