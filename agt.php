
<!doctype html>
<html>
<head>
	<style type="text/css">
	    body
	    {
	    	background-image: url(imgs/gaurav.jpg);
	    }
	    /*writing users name*/
	    #un {
	    	position: absolute;
	    	font-family: ALGERIAN;
	    	top: 30px;
            left: 1300px;
            font-size: 20px;
            color: #0000CD;
	    }

 /*styling for navigation system */

*{
		margin:0px;
		padding: 0px;
	}
		#container ul{
			list-style: none; 
		}
		#container ul li
		{
			background-color: #8E2323;
			width: 180px;
			border:1px solid white;
			line-height: 50px;
			text-align: center;
			float:left;
			color: white;
			font-size: 18px;
			position: relative;
		}
		#container ul li:hover
		{
			background-color: #388222;
		}
		#container ul ul
		{
			display: none;
		}
		#container ul li:hover ul
		{
			display: block;
		}
		#container ul ul ul
		{
			margin-left: 220px;
			top: 0px;
			position: absolute;

		}
/*styling for heading 2*/	    
 h2
  {
       color: maroon;
       text-align: center;
       font-size: 30px;
  }
 /*styling for paragraph */	 
 p
  {
  	font-size: 20px;
  	color:#800000;
  	font-family:arial;
  	line-height:150%;
  	text-indent: 30px;
  }
   /*styling for heading 1 */	 
 h1
  {
  	   color: #238E68		 ;
       text-align: center;
       font-size: 45px;
       font-family:algerian;
       padding:20px;   
  }
   /*styling for center paragraph*/	 
 #box
   {
   	position: absolute;
 	top:420px;
 	left: 300px; 
  	font-size: 25px;
    background-color: lightblue;
    width: 55%;
    border: 25px solid green;
    padding: 25px      margin: 25px;
   }
   #logout {
   	position: absolute;
    left: 1091px;
    top: 137px;
    font-size: 18px;
    color: white;
   }
   #bhar {
   	padding: 14px;
   	opacity: 1;
   	width: 180px;
    background-color: #8E2323;
    font-size: 18px;
    color: white;
   }
    #rang {
    	color: white;
    	text-decoration-style: none;
    }
<meta charset="utf-8">
  
</style>
 </head>

<body>
  <h1><b><u>Journey to an impaeccable author</u> </b>
   </h1>
  <br><br>
  <div id="un"><?php 
  session_start();
  echo "Hi, ".$_SESSION['name'];
  ?></div>
<div id="container">
 	<ul>
 		<li>Home</li>
 		<li>Blog</li> 
 		<li>Services
             <ul>
             	<li>Reading section</li>
             	<li>Entertainment
             	   <ul>
             	   	<li>Hollywood</li>
             	   	<li>Bollywood</li>
             	   	<li>Tv series</li>
             	   </ul></li>
             	<li>Author's note</li>
             </ul></li>
 		<li>Help</li>
 		<li>About</li>
 		<li>Contact</li>
 	</ul>
     <br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
    <div id="logout"><a href="http://localhost/del.php" id="rang"><button id="bhar">Logout</button></a></div>
<div id="box">
   <p> 
	Every person has hidden author inside it........just need to be find out 
		<br>
		<u>Start blogging and explore your writing talent.......</u></p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br>
  	<h2><a href="http://localhost:8080/testEditor.html">Create your blog</a></h2>
 </body>

 </html> 