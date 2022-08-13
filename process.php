<?php

	$Username = $_POST["YourName"];
	$UserAge = $_POST["YourAge"];
	$UserAddress = $_POST["YourAddress"];
	$ContactNum = $_POST["ContactNumber"];
	$link_address = "https://youtu.be/dQw4w9WgXcQ";
	$our_image = "our_meme.jpg";
	$sus_image = "sus_image.jpg";
	
	echo "<img src = '$our_image' alt = 'communism'>"
	echo "<img src = '$sus_image' alt = 'Among Us'>"
	echo "Hello".$Username.",".$UserAge."From".$UserAddress." with the contact number of".$ContactNum."."."Please click this link:";
	echo "<a href='$link_address'>https://www.gwaposigerry.com/Ghy5w8UQbCyu</a>";

?>
