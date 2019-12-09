<?php

$link = mysqli_connect("localhost", "root", "", "blog");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 

$sql = "INSERT INTO contacts (name, message, email ) VALUES ('$name','$message', '$email')";
if(mysqli_query($link, $sql)){

	header("location: homepage.html");
    //echo "Records added successfully.";

	
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	
}
 

mysqli_close($link);
?>




