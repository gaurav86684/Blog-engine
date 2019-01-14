<?php

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#h {
			position: absolute;
			top: 10px;
			left: 10px;
            font-family: Lucida Calligraphy;
		}
		#v1 {
			position: absolute;
			left: 180px;
            top: 10px;
            height: 20px;
            font-weight: bolder;
		}
		#v2 {
			position: absolute;
			left: 180px;
            top: 30px;
            height: 20px;
            font-weight: bolder;
		}
		#v3 {
			position: absolute;
			left: 180px;
            top: 50px;
            height: 20px;
            font-weight: bolder;
		}
		#t {
			position: absolute;
			left:10px;
			top: 70px;
		}
		#p {
			position: absolute;
			left: 400px;
			top: 70px;
		}
		#pn {
			position: absolute;
			top: 90px;
			left: 500px;
			width: 200px;
			font-family: Lucida Calligraphy;
			text-decoration-color: #FF0000;
		}
		.b1 {
			position: absolute;
			top: 85px;
			left: 1050px;
			padding: 4px;
			background-color: #FF7F00;
		}
		#b2 {
			position: absolute;
			top: 85px;
			left: 1120px;
			padding: 4px;
			background-color: #FF7F00;
		}
		#b3 {
			position: absolute;
			top: 85px;
			left: 1176px;
			padding: 4px;
			background-color: #FF7F00;
		}
		#b4 {
			position: absolute;
			top: 85px;
			left: 1249px;
			padding: 4px;
			background-color: #FF7F00;
		}
		#u {
			position: absolute;
			top: 10px;
			left: 1050px;
		}
		#t1 {
			position: absolute;
			left: 150px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#t2 {
			position: absolute;
			left: 180px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#bold {
			position: absolute;
			left: 210px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#ital {
			position: absolute;
			left: 240px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#underline {
			position: absolute;
			left: 270px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#color {
				position: absolute;
			left: 300px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#la {
			position: absolute;
			left: 600px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#ca {
			position: absolute;
			left: 630px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#ra {
			position: absolute;
			left: 660px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#gallery {
			position: absolute;
			left: 700px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		} 
		#vedio {
			position: absolute;
			left: 740px;
			top: 133px;
			border: 1px solid white;
			width: 25px;
		}
		#head {
			position: absolute;
			top: 133px;
			left: 330px;
		}
		#colorlist {
			position: absolute;
			top: 133px;
			left: 420px;
		}
		#textarea {
			position: fixed;
            top: 160px;
			width: 1000px;
		}
		#user {
			width: 100%;
			height: 100%;
		}
		#hw {
			position: absolute;
			top: 133px;
			left: 780px;
		} 
	</style>
	<script type="text/javascript">
		function fun()
		{
			var x1 = document.getElementById('user');
			x1.style.fontWeight = "normal";
		}
		function funky()
		{
			var x2 = document.getElementById('user');
			x2.style.fontWeight = "bold";
		}
		function italicize()
		{
			var x3= document.getElementById('user');
			x3.style.fontFamily = "Lucida Calligraphy";
		}
		function noi()
		{
			var x4 = document.getElementById('user');
			x4.style.fontFamily = "Arial";
		}
		function u()
		{
			var x5 = document.getElementById('user');
			x5.style.textDecoration = "underline";
		}
		function nu()
		{
			var x6 = document.getElementById('user');
			x6.style.textDecoration = "none";
		}
		function colorchange()
		{
			var x = document.getElementById('cl').value;
			var y = document.getElementById('user');
			y.style.color = x;
		}
		function rightalign()
		{
			var a = document.getElementById('user');
			a.style.textAlign = "right";
		}
		function centeralign()
		{
			var a = document.getElementById('user');
			a.style.textAlign = "center";
		}
		function leftalign()
		{
			var a = document.getElementById('user');
			a.style.textAlign = "left";
		}
		function fs()
		{
			var d = document.getElementById('textfont').value;
			var p = document.getElementById('user');
		    p.style.fontSize  = d;	

		}
		function handwriting()
		{
		      var b = document.getElementById('user');
			var c= document.getElementById('hndwrt').value;
			b.style.fontFamily = c;
		}
	</script>
</head>
<body>
     <div id="h">
     	<b><img src="Picture2.png" height="50px" width="50px">Blogger</b>
     </div>
     <div id="v1"><b>|</b></div>
     <div id="v2"><b>|</b></div>
     <div id="v3"><b>|</b></div>
     <div id="t"><h3 align="left" >MynewWebpage&nbsp;&nbsp;&nbsp;&nbsp;Post&nbsp;<input type="text" name="title" name = "pt" placeholder="Post Title"></h3></div>
     <div id="p"><h3>Posting as</h3></div>
     <div id="pn"></div>
     <b><div class="b1"><input type="button" name="publish" value="Publish"></div>&nbsp;&nbsp;<div id="b2"><input type="button" name="save" value="Save"></div></b>
     <b><div id="b3"><input type="button" name="preview" value="Preview"></div><div id="b4"><input type="button" name="close" value="Close"></div></b>
     <br><br><br><br><br><br>
     <hr>
     <div id="u"><a href="http://localhost/del.php"><input type="button" name="logout" value="LOG OUT"></a></div>
     <br>
     <div id="t1"><input type="image" src="imgs/undo.png" height="20px" width="20px"></div>
     <div id="t2"><input type="image" src="imgs/redo.png" height="20px" width="20px"></div>
     <div id="bold"><input type="image" src="imgs/bold.png"  height="20px" width="20px" onclick="funky()" ondblclick="fun()"></div>
     <div id="ital"><input type="image" src="imgs/italics.png" height="20px" width="20px" onclick="italicize()" ondblclick="noi()" ></div>
     <div id="underline"><input type="image" src="imgs/underline.png" height="20px" width="20px" onclick="u()" ondblclick="nu()"></div>&nbsp;&nbsp;
     <div id="color"><input type="image" src="imgs/brush.png" height="20px" width="20px"></div>
     <div id="la"><input type="image" src="imgs/leftalign.png" height="20px" width="20px" onclick="leftalign()"></div>
     <div id="ca"><input type="image" src="imgs/centeralign.png" height="20px" width="20px" onclick="centeralign()"></div>
     <div id="ra"><input type="image" src="imgs/rightalign.png" height="20px" width="20px" onclick="rightalign()"></div>
     <div id="gallery"><a href="https://localhost/"><input type="image" src="imgs/gallery.jpg" height="20px" width="20px"></a></div>
     <div id="vedio"><input type="image" src="imgs/vedio.jpg" height="20px" width="20px"></div>
     <div id="hw">
     	<select onchange="handwriting()" id="hndwrt">
     	 <option value="Arial">Arial</option>
     	 <option value="Lucida Calligraphy">Lucida Calligraphy</option>
     	 <option value="Algerian">Algerian</option>
        </select>
     </div>
     <div id="head"><select name="textstyle" onchange="fs()" id="textfont">
     	<option  value="13.5px">Normal</option>
     	 <option value="10px">Smallest</option>
     	 <option value="11px">Small</option>
     	 <option value="24px">Large</option>
     	 <option value="36px">Largest</option>
     </select></div>
     <div id="colorlist">
     	<select onchange="colorchange()" id="cl">
     		<option value="#000000">Black</option>
     		<option value="#F0F8FF">AliceBlue</option>
     		<option value="#FAEBD7">AntiqueWhite</option>
     		<option value="#00FFFF">Aqua</option>
     		<option value="#7FFFD4">Aquamarine</option>
     		<option value="#F0FFFF">Azure</option>
     		<option value="#F5F5DC">Beige</option>
     		<option value="#FFE4C4">Bisque</option>
     		<option value="#FFEBCD">Blanched Almond</option>
     		<option value="#0000FF">Blue</option>
     		<option value="#8A2BE2">BlueVoilet</option>
     		<option value="#A52A2A">Brown</option>
     		<option value="#DEB887">Burlywood</option>
     		<option value="#5F9EA0">Cadet Blue</option>
     		<option value="#7FFF00">Chartreuse</option>
     		<option value="#D2691E">Chocolate</option>
     		<option value="#FF7F50">Coral</option>
     		<option value="#6495ED">Cornflowerblue</option>
     		<option value="#FFF8DC">Cornsilk</option>
     		<option value="#DC143C">Crimson</option>
     		<option value="#00FFFF">Cyan</option>
     		<option value="#00008B">Dark Blue</option>
     		<option value="#008B8B">Dark Cyan</option>
     		<option value="#B8860B">Dark Golden Rod</option>
     		<option value="#A9A9A9">Dark Gray</option>
     		<option value="#A9A9A9">Dark Grey</option>
     		<option value="#006400">Dark Green</option>
     		<option value="#BDB76B">Dark Khaki</option>
     		<option value="#8B008B">Dark Magenta</option>
     		<option value="#556B2F">Dark Olive Green</option>
     		<option value="FF8C00">Dark Orange</option>
     		<option value="#9932CC">Dark Orchid</option>
     		<option value="#8B0000">Dark Red</option>
     		<option value="#E9967A">Dark Salmon</option>
     		<option value="#8FBC8F">Dark Sea Green</option>
     		<option value="#483D8B">Dark Slate Blue</option>
     		<option value="#2F4F4F">Dark Slate Gray</option>
     		<option value="#2F4F4F">Dark Slate Grey</option>
     		<option value="#00CED1">Dark Turquoise</option>
     		<option value="#9400D3">Dark Voilet</option>
     		<option value="#FF1493">Deep Pink</option>
     		<option value="#00BFFF">Deep Sky Blue</option>
     		<option value="#696969">Dim Gray</option>
     		<option value="#696969">Dim Grey</option>
     		<option value="#1E90FF">Dodger Blue</option>
     		<option value="#B22222">Fire Brick</option>
     		<option value="#FFFAF0">Floral White</option>
     		<option value="#228B22">Forest Green</option>
     		<option value="#FF00FF">Fuchsia</option>
     		<option value="#DCDCDC">Gainsboro</option>
     		<option value="#F8F8FF">Ghost White</option>
     		<option value="#FFD700">Gold</option>
     		<option value="#DAA520">Golden rod</option>
     		<option value="#808080">Gray</option>
     		<option value="#808080">Grey</option>
     		<option value="#008000">Green</option>
     		<option value="#ADFF2F">Green Yellow</option>
     		<option value="#F0FFF0">Honey Dew</option>
     		<option value="#FF69B4">Hot Pink</option>
     		<option value="#CD5C5C">Indian Red</option>
     		<option value="#4B0082">Indigo</option>
     		<option value="FFFFF0">Ivory</option>
     		<option value="#F0E68C">Khaki</option>
     		<option value="#E6E6FA">Lavender</option>
     		<option value="#FFF0F5">Lavender Brush</option>
     		<option value="#7CFC00">Law Green</option>
     		<option value="#FFFACD">Lemon Chiffon</option>
     		<option value="#ADD8E6">Light Blue</option>
     		<option value="#F08080">Light Coral</option>
     		<option value="#E0FFFF">Light Cyan</option>
     		<option value="#FAFAD2">Light Golden Rod Yellow</option>
     		<option value="#D3D3D3">Light Gray</option>
     		<option value="#D3D3D3">Light Grey</option>
     		<option value="#90EE90">Light Green</option>
     		<option value="#FFB6C1">Light Pink</option>
     		<option value="#FFA07A">Light Salmon</option>
     		<option value="#20B2AA">Light Sea Green</option>
     		<option value="#87CEFA">Light Sky Blue</option>
     		<option value="#778899">Light Slate Gray</option>
     		<option value="#778899">Light Slate Grey</option>
     		<option value="#B0C4DE">Light Steel Blue</option>
     		<option value="#FFFFE0">Light Yellow</option>
     		<option value="#00FF00">Lime</option>
     		<option value="#32CD32">Lime Green</option>
     		<option value="#FAF0E6">Linen</option>
     		<option value="#FF00FF">Magenta</option>
     		<option value="#800000">Maroon</option>
     		<option value="#66CDAA">Medium Aqua Marine</option>
     		<option value="#0000CD">Medium Blue</option>
     		<option value="#BA55D3">Medium Orchid</option>
     		<option value="#9370DB">Medium Purple</option>
     		<option value="#3CB371">Medium Sea Green</option>
     		<option value="#7B68EE">Medium Slate Blue</option>
     		<option value="#00FA9A">Medium Spring Green</option>
     		<option value="#48D1CC">Medium Turquoise</option>
     		<option value="#C71585">Medium Voilet Red</option>
     		<option value="#191970">Midnight Blue</option>
     		<option value="#F5FFFA">Mint Cream</option>
     		<option value="#FFE4E1">Misty Rose</option>
     		<option value="#FFE4B5">Moccasin</option>
     		<option value="#FFDEAD">Navajo White</option>
     		<option value="#000080">Navy</option>
     		<option value="#FDF5E6">Old Lace</option>
     		<option value="#808000">Olive</option>
     		<option value="#6B8E23">Olive Drab</option>
     		<option value="#FFA500">Orange</option>
     		<option value="#FF4500">Orange Red</option>
     		<option value="#DA70D6">Orchid</option>
     		<option value="#EEE8AA">Pale Golden Rod</option>
     		<option value="#98FB98">Pale Green</option>
     		<option value="#AFEEEE">Pale Turquoise</option>
     		<option value="#DB7093">Pale Voilet Red</option>
     		<option value="#FFEFD5">Papaya Whip</option>
     		<option value="#FFDAB9">Peach Puff</option>
     		<option value="#CD853F">Peru</option>
     		<option value="#FFC0CB">Pink</option>
     		<option value="#DDA0DD">Plum</option>
     		<option value="#B0E0E6">Powder Blue</option>
     		<option value="#800080">Purple</option>
     		<option value="#663399">Rebecca Purple</option>
     		<option value="#FF0000">Red</option>
     		<option value="#BC8F8F">Rosy Brown</option>
     		<option value="#4169E1">Royal Blue</option>
     		<option value="#8B4513">Saddle Brown</option>
     		<option value="#FA8072">Salmon</option>
     		<option value="#F4A460">Sandy Brown</option>
     		<option value="#2E8B57">Sea Green</option>
     		<option value="#FFF5EE">Sea Shell</option>
     		<option value="#A0522D">Sienna</option>
     		<option value="#C0C0C0">Silver</option>
     		<option value="#87CEEB">Sky Blue</option>
     		<option value="#6A5ACD">Slate Blue</option>
     		<option value="#708090">Slate Gray</option>
     		<option value="#708090">Slate Grey</option>
     		<option value="#FFFAFA">Snow</option>
     		<option value="#00FF7F">Spring Green</option>
     		<option value="#4682B4">Steel Blue</option>
     		<option value="#D2B48C">Tan</option>
     		<option value="#008080">Teal</option>
     		<option value="#D8BFD8">Thistle</option>
     		<option value="#FF6347">Tomato</option>
     		<option value="#40E0D0">Turquoise</option>
     		<option value="#EE82EE">Voilet</option>
     		<option value="#F5DEB3">Wheat</option>
     		<option value="#FFFFFF">White</option>
     		<option value="#F5F5F5">White Smoke</option>
     		<option value="#FFFF00">Yellow</option>
     		<option value="#9ACD32">Yellow Green</option>
     	</select>
     </div>
     <div id="textarea">
     	<textarea name = "ptext" placeholder="Start exploring your author" rows="30" cols="190"  id="user" contenteditable="true"></textarea>
     </div>
</body>
</html>