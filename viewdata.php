<?php
$con = mysqli_connect('localhost','root','','insert_db');

function showData(){

    global $con;

  $query = "SELECT * FROM `userdata`";
  $run = mysqli_query($con,$query);
  if($run == TRUE){
    ?>
    <table border="1" width="80" align="center">
    	<tr>
    		<th>NAME</th>
    		<th>FATHER NAME</th>
    		<th>EMAIL</th>
    	</tr>
    <?php
    while($data = mysqli_fetch_assoc($run)){
       
    	?>	

      <tr>
      	<td><?php echo $data['Name']; ?></td>
      	<td><?php echo $data['Father Name']; ?></td>
      	<td><?php echo $data['Email']; ?></td>
      </tr>
      <?php

}   
     ?> </table>     
        <?php   
  }
  else{
  	echo "Error!";
  }

}
?>

<html>
  <head>
  <title>show Data </title>
  </head>

  <body background="b.jpg">
  	<h2 align="center">USER ENTRY</h2>
  <?php showData(); ?>
</body>
</html>