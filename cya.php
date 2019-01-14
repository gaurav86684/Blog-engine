<?php
$name = $email = $gender = $password = $cpswd = "";
$nameErr = $emailErr = $genderErr = $perror = $cperror = "";
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
     #q1 {
       position: absolute;
      top: 10px;
      left: 400px;
      height: 800px;
      width: 600px;
      border: 3px solid #CDB79E;
      background-color: #FFFFE0;
      border-radius: 10px;
     }
     .redtext {color: red;}
     .kam {
      color: black;
      font-weight: bold;
     }
     .m {
      position: absolute;
      top: 420px;
      left: 10px;
      width: 60px;
     }
     .f {
      position: absolute;
      top: 420px;
      left: 80px;
      width: 80px;
     }
     .o {
      position: absolute;
      top: 420px;
      left: 165px;
     }
  </style>
</head>
<body bgcolor="#FFA54F">
    <div id="q1">
      <p class="redtext">*&nbsp;Required Fields</p>
      <form method="post" action="data.php">
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="kam"><i>Name:</i></div><input type="text" name="name" value="<?php echo $name; ?>" REQUIRED><span style="color:red">*</span>
      <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="kam"><i>Email-id</i></div><input type="text" name="email" value="<?php echo $email; ?>" REQUIRED><span style="color:red">*</span>
      <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="kam"><i>Password:</i></div><input type="password" name="password" value="<?php echo $password;?>" REQUIRED><span style="color:red">*</span>
      <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="kam"><i> Confirm Password:</i></div><input type="password" name="cpswd" value="<?php echo $cpswd;?>" REQUIRED><span style="color:red">*</span>
      <br><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="kam"><i>Gender:</i></div>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="m"><i>Male:</i><input type="radio" name="gender"  value="male" REQUIRED></div>
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="f"><i>Female:</i><input type="radio" name="gender" value="female" REQUIRED></div> 
      &nbsp;&nbsp;&nbsp;&nbsp;<div class="o"><i>Others:</i><input type="radio" name="gender"  value="others" REQUIRED></div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit">
      <br><br><br><br><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imgs/google.png" height="30px"  width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imgs/fb2.png" height="30px" width="30px">
      </form>
     </div>
</body>
</html>

