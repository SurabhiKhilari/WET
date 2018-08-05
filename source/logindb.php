<?php
session_start();
	$con=mysqli_connect('localhost','root','','crimefiles',3306);

	if(!$con)
	  die(mysqli_error());

		echo "Congo!! Connection established.";
	
	
	//variables
	
	$username = mysqli_real_escape_string($con, $_POST['us']);
	$password= mysqli_real_escape_string($con, $_POST['ps']);

	
	$_SESSION['us']=$username;
 if(isset($_SESSION['us']))
 {
     echo "USER : ".$_SESSION['us'];
 }

        $result = mysqli_query($con,"SELECT * FROM login WHERE username='$username' AND password='$password'");

        echo "<table border='1'>
        <tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>".$row['username']."</td>";
 echo "<td>".$row['password']."</td>";
 echo "</tr>";
}
 
echo "</table>";
echo "<a href='HomePage.html'>Homepage</a><br>";
echo "<a href='logout.php'>Logout</a>";
	//}
mysqli_close($con);	
	
?>