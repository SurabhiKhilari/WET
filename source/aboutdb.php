<?php

	$con=mysqli_connect('localhost','root','','crimefiles');

	if(!$con)
	 die(mysqli_error());

		echo "Congo!! Connection established.";
	
	
	//variables
	
	//$Username = mysqli_real_escape_string($con, $_POST['us']);
	$Feedback= mysqli_real_escape_string($con, $_POST['fd']);
	
	
	$sql="INSERT INTO feedback (feedback) VALUES ('$feedback')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Error:' .mysqli_error($con));
	}
	echo "1 record added";
	
        $result = mysqli_query($con,"SELECT * FROM feedback");
        echo "<table border='1'>
        <tr>

<th>feedback</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr>";
 //echo "<td>".$row['Username']."</td>";
 echo "<td>".$row['Feedback']."</td>";
 echo "</tr>";
}
 
echo "</table>";
	//}
mysqli_close($con);	
	
?>