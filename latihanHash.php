<?php 

	
if (isset($_POST["submit"])) {
	# code...
	$name = $_POST["name"];
	$endcode = base64_encode($name);
	echo "ini password_hash : " .password_hash($name, PASSWORD_DEFAULT);
	echo "<br>";
	echo "ini crypt : " .crypt($name, "@&#*%gdua");
	echo "<br>";
	echo "ini MD5 : " .md5($name);
	echo "<br>";
	echo "ini hash : " .hash("sha256", $name);
	echo "<br>";
	echo "ini sha1 : " .sha1($name);
	echo "<br>";
	echo "ini endcode : " .base64_encode($name);
	echo "<br>";
	echo "ini dekripsi : " .base64_decode($endcode);




}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 	<form method="post" action="">
 		<input type="text" name="name"><button name="submit">Submit</button>
 	</form>
 
 </body>
 </html>