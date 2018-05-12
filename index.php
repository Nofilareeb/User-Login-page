<!DOCTYPE html>
<html>
<head>
	<title>Insert Data In Php</title>
</head>
<body background="b.jpg">
	<h2 align="center">Your data stored in Database !</h2>
<form action="insert.php" method="post">
<table align="center" border="1" width="400" height="300">
	<tr>
   	<td colspan="5" align="center" bgcolor="grey">Student's Information: </td>
	</tr>
	<tr>
   	<td align="right">Name : </td><td><input type="text"  name="name" required placeholder="Enter your name..."></td>	
	</tr>
  <tr>
    <td align="right">Father Name : </td><td><input type="text"  name="Fname" required placeholder="Enter your father name..."></td> 
  </tr>
  <tr>
    <td align="right">Email : </td><td><input type="email"  name="email" required placeholder="Enter your email..."></td> 
  </tr>
	<tr>
		<td colspan="5" align="center"><input type="submit" name="submit" value="submit"></td>
   </tr>

</table> 
</form>
</body>
</html>
