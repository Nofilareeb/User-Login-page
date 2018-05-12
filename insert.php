<?php
$con = mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($con,'insert_db') or die("no db found");

  if(isset($_POST['submit']))
  {
  	
    $name = $_POST['name'];
    $Fname = $_POST['Fname'];
  	$email = $_POST['email'];

  	$query = "INSERT INTO `userdata`( `Name`, `Father Name`, `Email`) VALUES ('$name','$Fname','$email')";

  	if(mysqli_query($con,$query)) {
  		echo "data inserted Sucessfully";
  	}
  	else
  	{
  		echo "data not inserted";
  	}
  	
  }
?>
