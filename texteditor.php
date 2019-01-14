<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CKEditor</title>
		<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js">		</script>
		<style type="text/css">
			.submit {
				position: absolute;
                padding: 10px;
                background-color: #f8f8f8;
                border: none;
                border-radius: 25px;
                top: 10px;
                left: 1430px;
                font-family: ALGERIAN;
                cursor: pointer;
			}
			.submit:onhover {
               background-image:none !important;
               background-color:#ff0000 !important;
			}
			.save {
				width: 30px;
				color: black;
				height: 10px;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<textarea name="editor1"></textarea>n
			CKEDITOR.replace( 'editor1' );
		</script>
		<form action="" method="POST">
		<input type="button" class="submit" name="submit" value="SUBMIT"></button>
		<button class="save" value="SAVE"  onclick="fun()"><span>submit</span></button>
	    </form>
	</body>
	<button class="save" value="SAVE" onclick="fun()"></button>
	
	<script type="text/javascript">
		function fun ()
			{
				var x = document.getElementsByTagName("iframe")[0].contentWindow.document.getElementsByTagName("body")[0].innerText;
				console.log(x);
			}
	</script>
</html>