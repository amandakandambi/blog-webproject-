<?php

$link = mysqli_connect("localhost", "root", "", "coffee_shop");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 

$sql = "INSERT INTO contacts (fullname, email ) VALUES ('$fullname', '$email')";
if(mysqli_query($link, $sql)){

	header("location: homePage.html");
    //echo "Records added successfully.";

	
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	
}
 

mysqli_close($link);
?>




