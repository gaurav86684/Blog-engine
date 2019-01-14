<?php
session_start();
session_destroy();
setcookie('email',$email,time()-1800);
setcookie('password',$pass,time()-1800);
setcookie('name',$data['name'],time()-1800);
header('Location:insert.php');
?>