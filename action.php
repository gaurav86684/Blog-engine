<?php
 session_start();
if (isset($_SESSION['name'])) {
  echo "<h1 align = 'center'>You are already login</h1>";
  die();
}
?>
<?php
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
   	 $email = $_POST['email'];
   	 $pass = $_POST['pss'];
   	 $con = mysqli_connect("localhost","root","","bloggers");
   	 if(!$con)
   	 	die('Connection not established');
   	 $query = "SELECT * FROM `userdata`";
   	 $run = mysqli_query($con,$query);
   	 if($run==TRUE)
   	 {
   	 	$f=0;
   	    while($data = mysqli_fetch_assoc($run))
        {
          if($data['userid']==$email && $data['password']==$pass)
          {
          	$f=1;
          	break;
          }
        }
        if($f==0)
        {   
        	header('Location:login.php');
        }
        else if($f==1)
        {    
              $_SESSION['name'] = $data['name'];
              $_SESSION['email'] = $data['userid'];
              $_SESSION['password'] = $data['password'];
              $_SESSION['gender'] = $data['gender'];
              header('Location:agt.php');
        }
   	 }
   	 else
   	 	echo "Query not executed";
   }
 ?>
